select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043151378631592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043151378631592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043151378631592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043151378631592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022768974304199

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-23' and  '2021-11-23' and  billing_master.office_id= 1        
 Execution Time:0.0016260147094727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-23' and  '2021-11-23' and  billing_master.office_id= 1        
 Execution Time:0.0016260147094727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-23' and '2021-11-23' and  patient_registration.office_id= 1      
 Execution Time:0.0052449703216553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021049976348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021049976348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.019001007080078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021049976348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.019001007080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015769004821777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021049976348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.019001007080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015769004821777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028200149536133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021181106567383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021049976348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.019001007080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015769004821777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028200149536133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075440406799316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030829906463623

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030829906463623

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095200538635254

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038650035858154

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038650035858154

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032610893249512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034620761871338

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026299953460693

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026299953460693

select fname,lname,mrdno from patient_registration where  patient_registration_id='2710' and  office_id= '1' 
 Execution Time:0.00018000602722168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019059181213379

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019059181213379

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00047111511230469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027229785919189

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00047111511230469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027229785919189

select fname,lname,mrdno from patient_registration where  patient_registration_id='2793' and  office_id= '1' 
 Execution Time:0.00026607513427734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00059795379638672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051779747009277

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.00059795379638672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051779747009277

select fname,lname,mrdno from patient_registration where  patient_registration_id='2793' and  office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053980350494385

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053980350494385

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021820068359375

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0105140209198

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0105140209198

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0105140209198

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0105140209198

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0105140209198

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00054287910461426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048079490661621

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00054287910461426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048079490661621

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013518333435059

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013518333435059

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045890808105469

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045890808105469

select fname,lname,mrdno from patient_registration where  patient_registration_id='2771' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054717063903809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060915946960449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007249116897583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007249116897583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027952194213867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007249116897583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027952194213867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007249116897583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027952194213867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007249116897583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027952194213867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084495544433594

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011000633239746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011000633239746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099301338195801

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099301338195801

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064396858215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064396858215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064396858215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064396858215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036129951477051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015840530395508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015840530395508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014050006866455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0054948329925537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0054948329925537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0054948329925537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0054948329925537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0054948329925537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066509246826172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078830718994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078830718994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078830718994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078830718994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078830718994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0010290145874023

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0010290145874023

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049290657043457

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0010290145874023

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049290657043457

select fname,lname,mrdno from patient_registration where  patient_registration_id='2710' and  office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.047894954681396

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.047894954681396

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094103813171387

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028798580169678

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028798580169678

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050711631774902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050711631774902

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0023629665374756

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050570964813232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050570964813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050570964813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050570964813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050570964813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023341178894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.008375883102417

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0070641040802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023341178894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016510486602783

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016510486602783

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039160251617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039160251617432

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039160251617432

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039160251617432

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034060478210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039160251617432

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034060478210449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054891109466553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038459300994873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038459300994873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099706649780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099706649780273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016651153564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016651153564453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070810317993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070810317993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070810317993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035829544067383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064001083374023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050899982452393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070810317993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035829544067383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027840137481689

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027840137481689

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012340545654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014781951904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014781951904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014781951904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014781951904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00044012069702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026397705078125

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00044012069702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026397705078125

select fname,lname,mrdno from patient_registration where  patient_registration_id='1768' and  office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016870498657227

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016870498657227

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002418041229248

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025930404663086

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025930404663086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037219524383545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037219524383545

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082099437713623

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00073909759521484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046648979187012

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00073909759521484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046648979187012

select fname,lname,mrdno from patient_registration where  patient_registration_id='2284' and  office_id= '1' 
 Execution Time:0.000762939453125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011050701141357

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011050701141357

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034310817718506

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00242018699646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00242018699646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00242018699646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00242018699646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053830146789551

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066781044006348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066781044006348

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013580322265625

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013580322265625

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035591125488281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009160041809082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009160041809082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002532958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002532958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027449131011963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002532958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027449131011963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002532958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027449131011963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002532958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027449131011963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046091079711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049588680267334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049588680267334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049588680267334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049588680267334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032467842102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002673864364624

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049588680267334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032467842102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083119869232178

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059199333190918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012249946594238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012249946594238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033688545227051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060288906097412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058488845825195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058488845825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058488845825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058488845825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058488845825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2799' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039370059967041

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2799' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039370059967041

select fname,lname,mrdno from patient_registration where  patient_registration_id='2799' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060451030731201

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060451030731201

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029749870300293

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006476879119873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006476879119873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006476879119873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006476879119873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027720928192139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006476879119873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027720928192139

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2795' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025398731231689

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2795' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025398731231689

select fname,lname,mrdno from patient_registration where  patient_registration_id='2795' and  office_id= '1' 
 Execution Time:0.00071191787719727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032131671905518

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060081481933594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060081481933594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063490867614746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063490867614746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063490867614746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040109157562256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063490867614746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040109157562256

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078530311584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077390670776367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077390670776367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077390670776367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077390670776367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061891078948975

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082206726074219

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082206726074219

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007631778717041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007631778717041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062010288238525

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019760131835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019760131835938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048348903656006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048718452453613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033690929412842

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033690929412842

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034739971160889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039069652557373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056581497192383

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027258396148682

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027258396148682

select fname,lname,mrdno from patient_registration where  patient_registration_id='2760' and  office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00017595291137695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.0014498233795166

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.0014498233795166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037839412689209

select count(*) as cnt from patient_registration where  patient_registration_id= '2760' and  office_id= '1' 
 Execution Time:0.0014498233795166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037839412689209

select fname,lname,mrdno from patient_registration where  patient_registration_id='2760' and  office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001533031463623

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001533031463623

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036120414733887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036120414733887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036120414733887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017762184143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036120414733887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017762184143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014050960540771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073549747467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073549747467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073549747467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073549747467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073549747467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013711452484131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013711452484131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013711452484131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013711452484131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002547025680542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049622058868408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013711452484131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002547025680542

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076889991760254

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0083191394805908

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0083191394805908

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0035779476165771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088810920715332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088810920715332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00223708152771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001230001449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001230001449585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060880184173584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077760219573975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055820941925049

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013980865478516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013980865478516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013980865478516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013980865478516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034730434417725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026721954345703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013980865478516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034730434417725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006397008895874

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049185752868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049185752868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016138553619385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049185752868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016138553619385

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034899711608887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095860958099365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011049032211304

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049185752868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016138553619385

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034899711608887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005511999130249

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053820610046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053820610046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053820610046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053820610046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053820610046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018489360809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067687034606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067687034606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015451908111572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067687034606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015451908111572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017268657684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010528564453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067687034606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015451908111572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017268657684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.02357292175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025510787963867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.005012035369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.005012035369873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028891563415527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025298595428467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025298595428467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025298595428467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016708374023438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025298595428467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016708374023438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057101249694824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065183639526367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065183639526367

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060081481933594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060081481933594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016298294067383

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016298294067383

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041029453277588

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041029453277588

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016319751739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016319751739502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016319751739502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016319751739502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016319751739502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004584789276123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036652088165283

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036652088165283

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038430690765381

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037980079650879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037980079650879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038008689880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0085868835449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0085868835449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0085868835449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063841342926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0085868835449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056099891662598

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013461112976074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013461112976074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034580230712891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037910938262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037910938262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037910938262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043261051177979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037910938262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043261051177979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027570724487305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085070133209229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037910938262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043261051177979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027570724487305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087981224060059

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010349750518799

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010349750518799

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00094819068908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041849613189697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051908493041992

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033469200134277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033469200134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003943920135498

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082588195800781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082588195800781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001655101776123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028858184814453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028858184814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028858184814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028858184814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036060810089111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025668144226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028858184814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036060810089111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089879035949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070559978485107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070559978485107

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070559978485107

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070559978485107

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035800933837891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070559978485107

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035800933837891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061249732971191

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00092506408691406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00092506408691406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032570362091064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032570362091064

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031008720397949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020630359649658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020630359649658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020630359649658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020630359649658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036799907684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020630359649658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036799907684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067031383514404

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.009270191192627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.009270191192627

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029802322387695

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074887275695801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074887275695801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056982040405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056982040405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056982040405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056982040405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059049129486084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046679973602295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046679973602295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011749267578125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011749267578125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097012519836426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097012519836426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031020641326904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031020641326904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063550472259521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031020641326904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063550472259521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031020641326904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063550472259521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074598789215088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031020641326904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063550472259521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056500434875488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001514196395874

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001514196395874

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054738521575928

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042986869812012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002291202545166

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041508674621582

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048279762268066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048279762268066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060651302337646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018398761749268

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018398761749268

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015959739685059

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035231113433838

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043702125549316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038840770721436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038840770721436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038840770721436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038840770721436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039148330688477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013719081878662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038840770721436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039148330688477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088310241699219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017240047454834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017240047454834

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018730163574219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097107887268066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097107887268066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016520023345947

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015807867050171

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018341541290283

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018341541290283

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028500556945801

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.002032995223999

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.002032995223999

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-24' and '2021-11-24' and  patient_registration.office_id= 1      
 Execution Time:0.0053739547729492

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033199787139893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040409564971924

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033199787139893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040409564971924

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035128593444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033199787139893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040409564971924

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035128593444824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 46 
 Execution Time:0.0033020973205566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 67 
 Execution Time:0.0011317729949951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027399063110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027399063110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032098293304443

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0003819465637207

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00056004524230957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084400177001953

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00056004524230957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084400177001953

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0025379657745361

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0025379657745361

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0042550563812256

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00042915344238281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00034809112548828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00051593780517578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058698654174805

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052309036254883

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031330585479736

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031330585479736

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00061416625976562

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00061416625976562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00035381317138672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 83 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '26' and   office_id= '1' 
 Execution Time:0.001209020614624

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 26 
 Execution Time:0.00045084953308105

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.0005638599395752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006251335144043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006251335144043

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011379718780518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select * from examination where examination_id= '26' and   office_id= '1' 
 Execution Time:0.0015349388122559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 26 
 Execution Time:0.00043320655822754

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00050091743469238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 82 
 Execution Time:0.00015687942504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select * from examination where examination_id= '26' and   office_id= '1' 
 Execution Time:0.00060701370239258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 26 
 Execution Time:0.00044584274291992

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.0002589225769043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099515914916992


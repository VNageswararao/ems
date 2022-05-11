select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019068717956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019068717956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019068717956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019068717956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019800662994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019068717956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019800662994385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030472278594971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030472278594971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030472278594971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030472278594971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018799304962158

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0018830299377441

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0018830299377441

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0036449432373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001723051071167

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001723051071167

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034759044647217

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087213516235352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087213516235352

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025839805603027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025839805603027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095200538635254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095200538635254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043239593505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095200538635254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043239593505859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047428607940674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037631988525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095200538635254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043239593505859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047428607940674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093119144439697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088319778442383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088319778442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0092990398406982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088319778442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0092990398406982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0099670886993408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088319778442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0092990398406982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0099670886993408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0041179656982422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088319778442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0092990398406982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0099670886993408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0041179656982422

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '1644' and  office_id= '1' 
 Execution Time:0.0034871101379395

select count(*) as cnt from patient_registration where  patient_registration_id= '1644' and  office_id= '1' 
 Execution Time:0.0034871101379395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1644' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042619705200195

select count(*) as cnt from patient_registration where  patient_registration_id= '1644' and  office_id= '1' 
 Execution Time:0.0034871101379395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1644' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042619705200195

select fname,lname,mrdno from patient_registration where  patient_registration_id='1644' and  office_id= '1' 
 Execution Time:0.0039939880371094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.03967809677124

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.03967809677124

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023760795593262

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0038931369781494

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002302885055542

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00086212158203125

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00086212158203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.004072904586792

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00086212158203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.004072904586792

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.00087904930114746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015549659729004

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015549659729004

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0005488395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0005488395690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018000602722168

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0005488395690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018000602722168

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031423568725586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select count(*) as cnt from patient_registration where  patient_registration_id= '1635' and  office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_registration where  patient_registration_id= '1635' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1635' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023961067199707

select count(*) as cnt from patient_registration where  patient_registration_id= '1635' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1635' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023961067199707

select fname,lname,mrdno from patient_registration where  patient_registration_id='1635' and  office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071191787719727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071191787719727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034010410308838

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027680397033691

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027680397033691

select fname,lname,mrdno from patient_registration where  patient_registration_id='1542' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00040197372436523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025331974029541

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00040197372436523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025331974029541

select fname,lname,mrdno from patient_registration where  patient_registration_id='1542' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075721740722656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075721740722656

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030732154846191

select count(*) as cnt from patient_registration where  patient_registration_id= '824' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '824' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='824' and  doctors_registration.office_id= '1' 
 Execution Time:0.002708911895752

select count(*) as cnt from patient_registration where  patient_registration_id= '824' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='824' and  doctors_registration.office_id= '1' 
 Execution Time:0.002708911895752

select fname,lname,mrdno from patient_registration where  patient_registration_id='824' and  office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040984153747559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-11' and  '2021-10-11' and  billing_master.office_id= 1        
 Execution Time:0.001924991607666

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-11' and  '2021-10-11' and  billing_master.office_id= 1        
 Execution Time:0.001924991607666

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-11' and '2021-10-11' and  patient_registration.office_id= 1      
 Execution Time:0.0040431022644043

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-12' and  '2021-10-12' and  billing_master.office_id= 1        
 Execution Time:0.0013642311096191

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-12' and  '2021-10-12' and  billing_master.office_id= 1        
 Execution Time:0.0013642311096191

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-12' and '2021-10-12' and  patient_registration.office_id= 1      
 Execution Time:0.0031580924987793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-13' and  '2021-10-13' and  billing_master.office_id= 1        
 Execution Time:0.0013191699981689

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-13' and  '2021-10-13' and  billing_master.office_id= 1        
 Execution Time:0.0013191699981689

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-13' and '2021-10-13' and  patient_registration.office_id= 1      
 Execution Time:0.0032310485839844

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0014381408691406

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0014381408691406

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-14' and '2021-10-14' and  patient_registration.office_id= 1      
 Execution Time:0.0035438537597656

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-15' and  '2021-10-15' and  billing_master.office_id= 1        
 Execution Time:0.0013151168823242

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-15' and  '2021-10-15' and  billing_master.office_id= 1        
 Execution Time:0.0013151168823242

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-15' and '2021-10-15' and  patient_registration.office_id= 1      
 Execution Time:0.0031309127807617

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-16' and  '2021-10-16' and  billing_master.office_id= 1        
 Execution Time:0.0017731189727783

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-16' and  '2021-10-16' and  billing_master.office_id= 1        
 Execution Time:0.0017731189727783

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-16' and '2021-10-16' and  patient_registration.office_id= 1      
 Execution Time:0.0036008358001709

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-17' and  '2021-10-17' and  billing_master.office_id= 1        
 Execution Time:0.0019810199737549

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-17' and  '2021-10-17' and  billing_master.office_id= 1        
 Execution Time:0.0019810199737549

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-17' and '2021-10-17' and  patient_registration.office_id= 1      
 Execution Time:0.0027830600738525

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.0013408660888672

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.0013408660888672

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0035479068756104

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0051479339599609

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0051479339599609

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.003756046295166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-15' and  '2021-10-15' and  billing_master.office_id= 1        
 Execution Time:0.00081896781921387

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-15' and  '2021-10-15' and  billing_master.office_id= 1        
 Execution Time:0.00081896781921387

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-15' and '2021-10-15' and  patient_registration.office_id= 1      
 Execution Time:0.0018699169158936

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0014722347259521

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-14' and  '2021-10-14' and  billing_master.office_id= 1        
 Execution Time:0.0014722347259521

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-14' and '2021-10-14' and  patient_registration.office_id= 1      
 Execution Time:0.003748893737793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084519386291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084519386291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023999214172363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023999214172363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023999214172363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023999214172363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023999214172363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012941360473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071990489959717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071990489959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071990489959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071990489959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071990489959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from patient_registration where  patient_registration_id= '1645' and  office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from patient_registration where  patient_registration_id= '1645' and  office_id= '1' 
 Execution Time:0.00047588348388672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1645' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031650066375732

select count(*) as cnt from patient_registration where  patient_registration_id= '1645' and  office_id= '1' 
 Execution Time:0.00047588348388672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1645' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031650066375732

select fname,lname,mrdno from patient_registration where  patient_registration_id='1645' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.005357027053833

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.005357027053833

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001828670501709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089120864868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089120864868164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077915191650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025298595428467

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006317138671875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006317138671875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030810832977295

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039410591125488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038769245147705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030679702758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030679702758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072858333587646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088691711425781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088691711425781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036499500274658

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036990642547607

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036990642547607

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038678646087646

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021259784698486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0023488998413086

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0023488998413086

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025820732116699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034849643707275

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034849643707275

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016429424285889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003230094909668

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.002608060836792

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.002608060836792

select fname,lname,mrdno from patient_registration where  patient_registration_id='1615' and  office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00093603134155273

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00093603134155273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0042941570281982

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0057380199432373

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0057380199432373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.002816915512085

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0057380199432373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.002816915512085

select fname,lname,mrdno from patient_registration where  patient_registration_id='1468' and  office_id= '1' 
 Execution Time:0.0037739276885986

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012030601501465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012030601501465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023939609527588

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select count(*) as cnt from ipdcharge where  name = 'CYST EXCISION' and office_id= '1' 
 Execution Time:0.0093090534210205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062258243560791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062258243560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062258243560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062258243560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062258243560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select count(*) as cnt from patient_registration where  patient_registration_id= '1580' and  office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_registration where  patient_registration_id= '1580' and  office_id= '1' 
 Execution Time:0.00090193748474121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1580' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084900856018066

select count(*) as cnt from patient_registration where  patient_registration_id= '1580' and  office_id= '1' 
 Execution Time:0.00090193748474121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1580' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084900856018066

select fname,lname,mrdno from patient_registration where  patient_registration_id='1580' and  office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0025229454040527

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0025229454040527

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038309097290039

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0025229454040527

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038309097290039

select fname,lname,mrdno from patient_registration where  patient_registration_id='1468' and  office_id= '1' 
 Execution Time:0.001777172088623

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012109279632568

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012109279632568

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040929317474365

select * from ipdcharge where  ipdcharge_id=22  and office_id= 1 and status=1 
 Execution Time:0.0040619373321533

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072109699249268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072109699249268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072109699249268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072109699249268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072109699249268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00046992301940918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022799968719482

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00046992301940918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022799968719482

select fname,lname,mrdno from patient_registration where  patient_registration_id='1615' and  office_id= '1' 
 Execution Time:0.0034520626068115

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076079368591309

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076079368591309

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023510456085205

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035786628723145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016658306121826

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035786628723145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016658306121826

select fname,lname,mrdno from patient_registration where  patient_registration_id='100' and  office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020694732666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026450157165527

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026450157165527

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027799606323242

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027799606323242

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025899410247803

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025899410247803

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044429302215576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044429302215576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031580924987793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044429302215576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031580924987793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036079883575439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044429302215576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031580924987793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036079883575439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019159317016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044429302215576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031580924987793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036079883575439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019159317016602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003903865814209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031309127807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014591217041016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0071799755096436

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0071799755096436

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038011074066162

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029160976409912

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029160976409912

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025241374969482

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002169132232666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002169132232666

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032060146331787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047879219055176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047879219055176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047879219055176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058200359344482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047879219055176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058200359344482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077521800994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047879219055176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058200359344482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077521800994873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066409111022949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066409111022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067930221557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066409111022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067930221557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066409111022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067930221557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005748987197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005932092666626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066409111022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067930221557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005748987197876

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062322616577148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062322616577148

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010740756988525

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098109245300293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098109245300293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020880699157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021920204162598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021920204162598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035910606384277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035910606384277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079584121704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079584121704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033478736877441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046260356903076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046260356903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046260356903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004331111907959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046260356903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004331111907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017611980438232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046260356903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020248889923096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004331111907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017611980438232

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0069580078125

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0069580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037848949432373

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0069580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037848949432373

select fname,lname,mrdno from patient_registration where  patient_registration_id='1646' and  office_id= '1' 
 Execution Time:0.0030548572540283

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036358833312988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036358833312988

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037980079650879

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.0033581256866455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016541481018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032169818878174

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032169818878174

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028049945831299

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037381649017334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037381649017334

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037858486175537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037491321563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037491321563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037491321563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037491321563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037491321563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045270919799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045270919799805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033450126647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045270919799805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033450126647949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045270919799805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033450126647949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0054900646209717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045270919799805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033450126647949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0054900646209717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052118301391602

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0061070919036865

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0061070919036865

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048630237579346

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0061070919036865

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048630237579346

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.0014920234680176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012960433959961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012960433959961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0079028606414795

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037951469421387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037951469421387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035688877105713

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020298957824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015950202941895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015950202941895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030419826507568

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003788948059082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003788948059082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072591304779053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003788948059082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072591304779053

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00335693359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003788948059082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072591304779053

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00335693359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083868503570557

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048184394836426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083708763122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033071041107178

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033071041107178

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031468868255615

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023128986358643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00032401084899902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019490718841553

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00032401084899902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019490718841553

select fname,lname,mrdno from patient_registration where  patient_registration_id='1103' and  office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037779808044434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037779808044434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022659301757812

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068168640136719

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068168640136719

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018861293792725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055789947509766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022571086883545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071008205413818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041391849517822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022571086883545

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039358139038086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.012409925460815

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.012409925460815

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010452032089233

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039749145507812

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039749145507812

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0083179473876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041818618774414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041818618774414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041818618774414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017399787902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041818618774414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017399787902832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040960311889648

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004025936126709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004025936126709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015361309051514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032720565795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032720565795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011137008666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006110668182373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006110668182373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006110668182373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006110668182373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0046911239624023

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0046911239624023

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024521350860596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024521350860596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024521350860596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024521350860596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001856803894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001986026763916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039958953857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024521350860596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001856803894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036680698394775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.041069984436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.041069984436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020639896392822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041561126708984

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.041069984436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020639896392822

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0156090259552

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002039909362793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056838989257812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002039909362793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071611404418945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071611404418945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079748630523682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071611404418945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079748630523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071611404418945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079748630523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0064220428466797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0064220428466797

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037357807159424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067489147186279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067489147186279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074689388275146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067489147186279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074689388275146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067489147186279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074689388275146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067489147186279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074689388275146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020216941833496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020216941833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096640586853027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020216941833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096640586853027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020216941833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096640586853027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020216941833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096640586853027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0020279884338379

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0020279884338379

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047869682312012

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.0020279884338379

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047869682312012

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.0017240047454834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00030612945556641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014679431915283

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00030612945556641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014679431915283

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0073459148406982

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0073459148406982

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00071620941162109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0010318756103516

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0010318756103516

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042879581451416

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0010318756103516

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042879581451416

select fname,lname,mrdno from patient_registration where  patient_registration_id='1103' and  office_id= '1' 
 Execution Time:0.0049481391906738

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030250549316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030250549316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030250549316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018539428710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030250549316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018539428710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030250549316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018539428710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017120838165283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017120838165283

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049219131469727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081014633178711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081014633178711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023000240325928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select count(*) as cnt from patient_registration where  patient_registration_id= '903' and  office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from patient_registration where  patient_registration_id= '903' and  office_id= '1' 
 Execution Time:0.00054407119750977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='903' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018360614776611

select count(*) as cnt from patient_registration where  patient_registration_id= '903' and  office_id= '1' 
 Execution Time:0.00054407119750977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='903' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018360614776611

select fname,lname,mrdno from patient_registration where  patient_registration_id='903' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_registration where  patient_registration_id= '900' and  office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from patient_registration where  patient_registration_id= '900' and  office_id= '1' 
 Execution Time:0.00048613548278809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='900' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017850399017334

select count(*) as cnt from patient_registration where  patient_registration_id= '900' and  office_id= '1' 
 Execution Time:0.00048613548278809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='900' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017850399017334

select fname,lname,mrdno from patient_registration where  patient_registration_id='900' and  office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022637844085693

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023739337921143

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045490264892578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043869018554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043869018554688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033478736877441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043869018554688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033478736877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043869018554688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033478736877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043869018554688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033478736877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048949718475342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011467933654785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077295303344727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00331711769104

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024569034576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024569034576416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024569034576416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024569034576416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024569034576416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034639835357666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026509761810303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026509761810303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040020942687988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042219161987305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042219161987305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042219161987305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042219161987305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042219161987305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='651' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015099048614502

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='651' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015099048614502

select fname,lname,mrdno from patient_registration where  patient_registration_id='651' and  office_id= '1' 
 Execution Time:0.00018906593322754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064778327941895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064778327941895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025169849395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032978057861328

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='651' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016059875488281

select count(*) as cnt from patient_registration where  patient_registration_id= '651' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='651' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016059875488281

select fname,lname,mrdno from patient_registration where  patient_registration_id='651' and  office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020623207092285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021960735321045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062322616577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073385238647461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031211376190186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090408325195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034089088439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084891319274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025177001953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082898139953613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082898139953613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082898139953613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082898139953613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025758743286133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086307525634766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086307525634766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086307525634766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086307525634766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026082992553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020132064819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003058910369873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046639442443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00038981437683105

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025980472564697

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00038981437683105

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025980472564697

select fname,lname,mrdno from patient_registration where  patient_registration_id='1659' and  office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095915794372559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095915794372559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00083804130554199

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041389465332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023620128631592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00152587890625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00152587890625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00152587890625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00045680999755859

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00045680999755859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029809474945068

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00045680999755859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029809474945068

select fname,lname,mrdno from patient_registration where  patient_registration_id='1659' and  office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '1665' and  office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '1665' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1665' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017659664154053

select count(*) as cnt from patient_registration where  patient_registration_id= '1665' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1665' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017659664154053

select fname,lname,mrdno from patient_registration where  patient_registration_id='1665' and  office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046181678771973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046181678771973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036098957061768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046172142028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046172142028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046172142028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046172142028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046172142028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002302885055542

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0003819465637207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028939247131348

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.0003819465637207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028939247131348

select fname,lname,mrdno from patient_registration where  patient_registration_id='1468' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048112869262695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067710876464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0053319931030273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0053319931030273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0015320777893066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056099891662598

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043416023254395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040321350097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012162923812866

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035099983215332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035099983215332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018069744110107

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018899440765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080609321594238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074601173400879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044107437133789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019001960754395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071191787719727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071191787719727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071191787719727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011098384857178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071191787719727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011098384857178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1634' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017001628875732

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1634' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017001628875732

select fname,lname,mrdno from patient_registration where  patient_registration_id='1634' and  office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010139942169189

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010139942169189

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034451484680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034451484680176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034451484680176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034451484680176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010759830474854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001859188079834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034451484680176

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010759830474854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033600330352783

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.02483606338501

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.02483606338501

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0098950862884521

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056960582733154

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056960582733154

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028791427612305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029199123382568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029199123382568

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047800540924072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029199123382568

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047800540924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001777172088623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029199123382568

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047800540924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001777172088623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017638206481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046408176422119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029199123382568

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047800540924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001777172088623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017638206481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011384963989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037081241607666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038177967071533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046467781066895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00061583518981934

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032191276550293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032191276550293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002856969833374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033800601959229

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039379596710205

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039379596710205

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0081140995025635

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037178993225098

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037178993225098

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037820339202881

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039739608764648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039739608764648

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086379051208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086379051208496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043008327484131

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00094008445739746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00094008445739746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068998336791992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027098655700684

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012722015380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005526065826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0074141025543213

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0074141025543213

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-20' and '2021-10-20' and  patient_registration.office_id= 1      
 Execution Time:0.0027668476104736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select count(*) as cnt from patient_registration where  patient_registration_id= '746' and  office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from patient_registration where  patient_registration_id= '746' and  office_id= '1' 
 Execution Time:0.00064897537231445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034000873565674

select count(*) as cnt from patient_registration where  patient_registration_id= '746' and  office_id= '1' 
 Execution Time:0.00064897537231445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034000873565674

select fname,lname,mrdno from patient_registration where  patient_registration_id='746' and  office_id= '1' 
 Execution Time:0.00026321411132812


select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052869319915771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052869319915771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052869319915771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0064709186553955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052869319915771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0064709186553955

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0012819766998291

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0012819766998291

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-04' and '2021-11-04' and  patient_registration.office_id= 1      
 Execution Time:0.0048580169677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001215934753418

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001215934753418

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.002065896987915

select count(*) as cnt from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.00064897537231445

select * from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.0025539398193359

select count(*) as cnt from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.00064897537231445

select * from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.0025539398193359

select * from billing_detail where  billing_master_id= '345' 
 Execution Time:0.0035839080810547

select count(*) as cnt from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.00064897537231445

select * from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.0025539398193359

select * from billing_detail where  billing_master_id= '345' 
 Execution Time:0.0035839080810547

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0024819374084473

select count(*) as cnt from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.00064897537231445

select * from billing_master where  billing_master_id= '345' and  office_id= '1' 
 Execution Time:0.0025539398193359

select * from billing_detail where  billing_master_id= '345' 
 Execution Time:0.0035839080810547

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0024819374084473

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.005202054977417

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.005202054977417

select fname,lname,mrdno from patient_registration where  patient_registration_id='2147' and  office_id= '1' 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select * from office where  office_id= '1' 
 Execution Time:0.00050687789916992

select * from office where  office_id= '1' 
 Execution Time:0.00053000450134277

select * from office where  office_id= '1' 
 Execution Time:0.0015280246734619

select * from office where  office_id= '1' 
 Execution Time:0.00061202049255371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select * from office where  office_id= '1' 
 Execution Time:0.00069785118103027

select * from office where  office_id= '1' 
 Execution Time:0.0026919841766357

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0022058486938477

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0022058486938477

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-04' and '2021-11-04' and  patient_registration.office_id= 1      
 Execution Time:0.0042469501495361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00030994415283203

select * from billing_detail where  billing_master_id= '343' 
 Execution Time:0.00056290626525879

select count(*) as cnt from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_master where  billing_master_id= '343' and  office_id= '1' 
 Execution Time:0.00030994415283203

select * from billing_detail where  billing_master_id= '343' 
 Execution Time:0.00056290626525879

select * from opdcharge where  opdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018601417541504

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018601417541504

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0030248165130615

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00046205520629883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1587' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037288665771484

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00046205520629883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1587' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037288665771484

select fname,lname,mrdno from patient_registration where  patient_registration_id='1587' and  office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00083208084106445

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00083208084106445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1587' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021970272064209

select count(*) as cnt from patient_registration where  patient_registration_id= '1587' and  office_id= '1' 
 Execution Time:0.00083208084106445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1587' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021970272064209

select fname,lname,mrdno from patient_registration where  patient_registration_id='1587' and  office_id= '1' 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.024049043655396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052468776702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.024049043655396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045371055603027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00054097175598145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1282' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034358501434326

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00054097175598145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1282' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034358501434326

select fname,lname,mrdno from patient_registration where  patient_registration_id='1282' and  office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066089630126953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066089630126953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from doctors_registration where  name = 'VINOD KUMAR' and office_id= '1' 
 Execution Time:0.0018429756164551

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081899166107178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081899166107178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081899166107178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081899166107178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055980682373047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081899166107178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055980682373047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0030179023742676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0030179023742676

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-04' and '2021-11-04' and  patient_registration.office_id= 1      
 Execution Time:0.0045168399810791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053470134735107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029652118682861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029652118682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029652118682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029652118682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029652118682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00047206878662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1282' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028748512268066

select count(*) as cnt from patient_registration where  patient_registration_id= '1282' and  office_id= '1' 
 Execution Time:0.00047206878662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1282' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028748512268066

select fname,lname,mrdno from patient_registration where  patient_registration_id='1282' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034019947052002

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034019947052002

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020790100097656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0022571086883545

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051949024200439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051949024200439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051949024200439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051949024200439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051949024200439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010106086730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010106086730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010106086730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010106086730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0013420581817627

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-04' and  '2021-11-04' and  billing_master.office_id= 1        
 Execution Time:0.0013420581817627

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-04' and '2021-11-04' and  patient_registration.office_id= 1      
 Execution Time:0.0037088394165039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027470588684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027470588684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027470588684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027470588684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017781019210815

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027470588684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046510696411133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004641056060791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004641056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004641056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004641056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061061382293701

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061061382293701

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061061382293701

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061061382293701

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052380561828613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041518211364746

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00080990791320801

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00080990791320801

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0012919902801514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014832019805908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014832019805908

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010538101196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017151832580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039107799530029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014832019805908

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010538101196289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049359798431396

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049519538879395

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049519538879395

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044209957122803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044131278991699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010919570922852

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010919570922852

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038139820098877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038139820098877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033590793609619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014510154724121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014510154724121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014510154724121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014510154724121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014510154724121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081396102905273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001633882522583

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001633882522583

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004000186920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040490627288818

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013530254364014

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044040679931641

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00055193901062012

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select count(*) as cnt from patient_registration where  patient_registration_id= '1926' and  office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_registration where  patient_registration_id= '1926' and  office_id= '1' 
 Execution Time:0.0005500316619873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1926' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033278465270996

select count(*) as cnt from patient_registration where  patient_registration_id= '1926' and  office_id= '1' 
 Execution Time:0.0005500316619873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1926' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033278465270996

select fname,lname,mrdno from patient_registration where  patient_registration_id='1926' and  office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049209594726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_registration where  patient_registration_id= '1843' and  office_id= '1' 
 Execution Time:0.00097298622131348

select count(*) as cnt from patient_registration where  patient_registration_id= '1843' and  office_id= '1' 
 Execution Time:0.00097298622131348

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1843' and  doctors_registration.office_id= '1' 
 Execution Time:0.006450891494751

select count(*) as cnt from patient_registration where  patient_registration_id= '1843' and  office_id= '1' 
 Execution Time:0.00097298622131348

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1843' and  doctors_registration.office_id= '1' 
 Execution Time:0.006450891494751

select fname,lname,mrdno from patient_registration where  patient_registration_id='1843' and  office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0048341751098633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0048341751098633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002918004989624

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029869079589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029869079589844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043261051177979

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037360191345215

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037360191345215

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001025915145874

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028359889984131

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019528865814209

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019528865814209

select fname,lname,mrdno from patient_registration where  patient_registration_id='1920' and  office_id= '1' 
 Execution Time:0.00022578239440918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0017020702362061

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0017020702362061

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0011260509490967

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086116790771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086116790771484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055718421936035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055718421936035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055718421936035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008242130279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055718421936035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008242130279541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044779777526855

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045895576477051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002277135848999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002277135848999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002277135848999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002277135848999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002277135848999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036578178405762

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00082921981811523

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00082921981811523

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026040077209473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026040077209473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042178630828857

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072503089904785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040221214294434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040221214294434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042848587036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094914436340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094914436340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094914436340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094914436340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046861171722412

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052714347839355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052714347839355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0089831352233887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0089831352233887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0089831352233887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0089831352233887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049540996551514

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041699409484863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041821002960205

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041821002960205

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032999515533447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00347900390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00347900390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00347900390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00347900390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085783004760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032761096954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00347900390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085783004760742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044419765472412

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011968612670898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011968612670898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076484680175781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076484680175781

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031771659851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047101974487305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047101974487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047101974487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047101974487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047101974487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065779685974121

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065779685974121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.005220890045166

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065779685974121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.005220890045166

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00039076805114746

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035285949707031

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015289783477783

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015289783477783

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026679039001465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0055830478668213

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0055830478668213

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015909671783447

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012199878692627

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012199878692627

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from patient_registration where  patient_registration_id= '2175' and  office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_registration where  patient_registration_id= '2175' and  office_id= '1' 
 Execution Time:0.00057697296142578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2175' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029780864715576

select count(*) as cnt from patient_registration where  patient_registration_id= '2175' and  office_id= '1' 
 Execution Time:0.00057697296142578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2175' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029780864715576

select fname,lname,mrdno from patient_registration where  patient_registration_id='2175' and  office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0027840137481689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023529529571533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043728351593018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063705444335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004835844039917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050783157348633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050783157348633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010819435119629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010819435119629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035960674285889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046348571777344

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035641193389893

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035641193389893

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018930435180664

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049810409545898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055384635925293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055384635925293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010941028594971

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094485282897949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094485282897949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034289360046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034289360046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031700134277344

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011382102966309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047299861907959

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047299861907959

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018341541290283

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016758441925049

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016758441925049

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022408962249756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select count(*) as cnt from patient_registration where  patient_registration_id= '2120' and  office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_registration where  patient_registration_id= '2120' and  office_id= '1' 
 Execution Time:0.00061202049255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2120' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052759647369385

select count(*) as cnt from patient_registration where  patient_registration_id= '2120' and  office_id= '1' 
 Execution Time:0.00061202049255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2120' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052759647369385

select fname,lname,mrdno from patient_registration where  patient_registration_id='2120' and  office_id= '1' 
 Execution Time:0.0009608268737793

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010769367218018

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010769367218018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098800659179688

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098800659179688

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023508071899414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014159679412842

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014159679412842

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select count(*) as cnt from patient_registration where  patient_registration_id= '1810' and  office_id= '1' 
 Execution Time:0.00064182281494141

select count(*) as cnt from patient_registration where  patient_registration_id= '1810' and  office_id= '1' 
 Execution Time:0.00064182281494141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1810' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024011135101318

select count(*) as cnt from patient_registration where  patient_registration_id= '1810' and  office_id= '1' 
 Execution Time:0.00064182281494141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1810' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024011135101318

select fname,lname,mrdno from patient_registration where  patient_registration_id='1810' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043392181396484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00027298927307129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1811' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022270679473877

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00027298927307129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1811' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022270679473877

select fname,lname,mrdno from patient_registration where  patient_registration_id='1811' and  office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '1809' and  office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from patient_registration where  patient_registration_id= '1809' and  office_id= '1' 
 Execution Time:0.00082492828369141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1809' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062451362609863

select count(*) as cnt from patient_registration where  patient_registration_id= '1809' and  office_id= '1' 
 Execution Time:0.00082492828369141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1809' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062451362609863

select fname,lname,mrdno from patient_registration where  patient_registration_id='1809' and  office_id= '1' 
 Execution Time:0.0032830238342285

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1811' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021810531616211

select count(*) as cnt from patient_registration where  patient_registration_id= '1811' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1811' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021810531616211

select fname,lname,mrdno from patient_registration where  patient_registration_id='1811' and  office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067710876464844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067710876464844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013918876647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013918876647949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013918876647949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013918876647949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013918876647949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0023000240325928

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0023000240325928

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029311180114746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091409683227539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091409683227539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086307525634766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086307525634766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031650066375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031650066375732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031650066375732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031650066375732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033740997314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031650066375732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038001537322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033740997314453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047948360443115

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.00057291984558105

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1478' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036990642547607

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.00057291984558105

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1478' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036990642547607

select fname,lname,mrdno from patient_registration where  patient_registration_id='1478' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002291202545166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069713592529297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069713592529297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064682960510254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064682960510254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064682960510254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064682960510254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015230178833008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056018829345703

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094699859619141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094699859619141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057899951934814

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012078285217285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013301372528076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035581588745117

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019040107727051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019040107727051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026299953460693

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00341796875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00341796875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043580532073975

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029990673065186

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029990673065186

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035181045532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035181045532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035181045532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035181045532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010503053665161

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022459030151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035181045532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033283233642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067305564880371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067305564880371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038220882415771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038220882415771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038220882415771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018520355224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038220882415771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018520355224609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074481964111328

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002138614654541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026822090148926

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040292739868164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084996223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084996223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049190521240234

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012328624725342

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012328624725342

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004525899887085

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0036580562591553

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0036580562591553

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041768550872803

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0036580562591553

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041768550872803

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025508403778076

select count(*) as cnt from patient_registration where  patient_registration_id= '2191' and  office_id= '1' 
 Execution Time:0.00094008445739746

select count(*) as cnt from patient_registration where  patient_registration_id= '2191' and  office_id= '1' 
 Execution Time:0.00094008445739746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2191' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '2191' and  office_id= '1' 
 Execution Time:0.00094008445739746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2191' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038290023803711

select fname,lname,mrdno from patient_registration where  patient_registration_id='2191' and  office_id= '1' 
 Execution Time:0.0034170150756836

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028960704803467

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028960704803467

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0020899772644043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008781909942627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008781909942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008781909942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008781909942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008781909942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041794776916504

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001446008682251

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001446008682251

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018808841705322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051593780517578

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054700374603271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-05' and '2021-11-05' and  patient_registration.office_id= 1      
 Execution Time:0.011614084243774

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.078689813613892

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.078689813613892

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.058764934539795

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-05' and  '2021-11-05' and  billing_master.office_id= 1        
 Execution Time:0.0010199546813965

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-05' and  '2021-11-05' and  billing_master.office_id= 1        
 Execution Time:0.0010199546813965

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-05' and '2021-11-05' and  patient_registration.office_id= 1      
 Execution Time:0.00069904327392578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.02759313583374

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.0013320446014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0030498504638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011959075927734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00072312355041504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0039279460906982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00059103965759277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0068459510803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027101039886475

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0013191699981689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011000633239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011000633239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011000633239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011000633239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011000633239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014560222625732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031390190124512


select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022170543670654

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-02' and  '2021-11-02' and  billing_master.office_id= 1        
 Execution Time:0.0019099712371826

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-02' and  '2021-11-02' and  billing_master.office_id= 1        
 Execution Time:0.0019099712371826

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-02' and '2021-11-02' and  patient_registration.office_id= 1      
 Execution Time:0.0069029331207275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018088817596436

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018088817596436

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0031189918518066

select count(*) as cnt from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00059008598327637

select * from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00059008598327637

select * from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00041508674621582

select * from billing_detail where  billing_master_id= '339' 
 Execution Time:0.0056500434875488

select count(*) as cnt from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00059008598327637

select * from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00041508674621582

select * from billing_detail where  billing_master_id= '339' 
 Execution Time:0.0056500434875488

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0023248195648193

select count(*) as cnt from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00059008598327637

select * from billing_master where  billing_master_id= '339' and  office_id= '1' 
 Execution Time:0.00041508674621582

select * from billing_detail where  billing_master_id= '339' 
 Execution Time:0.0056500434875488

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0023248195648193

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00076580047607422

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00076580047607422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2086' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022010803222656

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00076580047607422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2086' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022010803222656

select fname,lname,mrdno from patient_registration where  patient_registration_id='2086' and  office_id= '1' 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-02' and  '2021-11-02' and  billing_master.office_id= 1        
 Execution Time:0.0018820762634277

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-02' and  '2021-11-02' and  billing_master.office_id= 1        
 Execution Time:0.0018820762634277

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-02' and '2021-11-02' and  patient_registration.office_id= 1      
 Execution Time:0.0043599605560303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018420219421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019698143005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018420219421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024509429931641

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024509429931641

select fname,lname,mrdno from patient_registration where  patient_registration_id='1982' and  office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033020973205566

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028729438781738

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028729438781738

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021939277648926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028209686279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028209686279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028209686279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028209686279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070278644561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028209686279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.002129077911377

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.002129077911377

select fname,lname,mrdno from patient_registration where  patient_registration_id='1982' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041484832763672

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045418739318848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027041435241699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014221668243408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029921531677246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017940998077393

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017940998077393

select fname,lname,mrdno from patient_registration where  patient_registration_id='1768' and  office_id= '1' 
 Execution Time:0.00018978118896484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072693824768066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072693824768066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010309219360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010309219360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043320655822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043320655822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043320655822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043320655822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025560855865479

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002281665802002

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071907043457031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042059421539307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042059421539307

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012469291687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041399002075195

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092387199401855

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092387199401855

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036730766296387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036730766296387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044398307800293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010240077972412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010240077972412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039358139038086

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057411193847656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057411193847656

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00072193145751953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038180351257324

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00072193145751953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038180351257324

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0076720714569092

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0076720714569092

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034301280975342

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069999694824219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069999694824219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069999694824219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069999694824219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004824161529541

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006108283996582

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092601776123047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092601776123047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017721652984619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032379627227783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032379627227783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081014633178711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081014633178711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002396821975708

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068187713623047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068187713623047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025677680969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086228847503662

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054612159729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005018949508667

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00047492980957031

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022859573364258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022859573364258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008549690246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035960674285889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0089318752288818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024731159210205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008549690246582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045108795166016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051116943359375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051116943359375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014760494232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014760494232178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014760494232178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014760494232178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014760494232178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040431022644043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019311904907227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044140815734863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050878524780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050878524780273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075581073760986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041701793670654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039880275726318

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012509822845459

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061321258544922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061321258544922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011516094207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042798519134521

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084900856018066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084900856018066

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095391273498535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021500587463379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009458065032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095391273498535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030980110168457

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030980110168457

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035550594329834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088977813720703

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088977813720703

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001701831817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001701831817627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001701831817627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001701831817627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094985961914062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001701831817627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094985961914062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048613548278809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0026078224182129

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0026078224182129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1064' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033547878265381

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0026078224182129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1064' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033547878265381

select fname,lname,mrdno from patient_registration where  patient_registration_id='1064' and  office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085783004760742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061583518981934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040919780731201

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039410591125488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039410591125488

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077581405639648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078201293945312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050258636474609

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031449794769287

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031449794769287

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039901733398438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039901733398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0008242130279541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039901733398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0008242130279541

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.00073719024658203

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.00073719024658203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='142' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034899711608887

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.00073719024658203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='142' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034899711608887

select fname,lname,mrdno from patient_registration where  patient_registration_id='142' and  office_id= '1' 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00040197372436523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033068656921387

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00040197372436523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033068656921387

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030679702758789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030679702758789

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037479400634766

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select * from ipdcharge where  ipdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select * from ipdcharge where  ipdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.003331184387207

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.003331184387207

select fname,lname,mrdno from patient_registration where  patient_registration_id='1911' and  office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095486640930176

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095486640930176

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0007328987121582

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024318695068359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074982643127441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074982643127441

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012540817260742

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012540817260742

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038988590240479

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095200538635254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095200538635254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0085067749023438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080585479736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080585479736328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080585479736328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080585479736328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080585479736328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094294548034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042159557342529

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027549266815186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041861534118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041861534118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041861534118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041861534118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084805488586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041861534118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084805488586426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027561187744141

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010769367218018

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010769367218018

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077509880065918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082921981811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082921981811523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045859813690186

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052309036254883

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00046801567077637

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026659965515137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00058889389038086

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00058889389038086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025651454925537

select count(*) as cnt from patient_registration where  patient_registration_id= '1982' and  office_id= '1' 
 Execution Time:0.00058889389038086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025651454925537

select fname,lname,mrdno from patient_registration where  patient_registration_id='1982' and  office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003359317779541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037379264831543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037379264831543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007481575012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051708221435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015518665313721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015518665313721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024571418762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009876012802124

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009876012802124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009876012802124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009876012802124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0062270164489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009876012802124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0062270164489746

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0063509941101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-03' and '2021-11-03' and  patient_registration.office_id= 1      
 Execution Time:0.0029029846191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028471946716309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028471946716309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028471946716309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028471946716309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-03' and  '2021-11-03' and  billing_master.office_id= 1        
 Execution Time:0.002079963684082

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-03' and  '2021-11-03' and  billing_master.office_id= 1        
 Execution Time:0.002079963684082

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-03' and '2021-11-03' and  patient_registration.office_id= 1      
 Execution Time:0.0023260116577148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029988288879395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029988288879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029988288879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029988288879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029988288879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035231113433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015620946884155

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035231113433838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010987997055054

select * from office where  office_id= '1' 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002295970916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002295970916748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002295970916748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002295970916748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025520324707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025911331176758

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002295970916748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025520324707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578


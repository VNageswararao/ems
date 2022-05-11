select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.18065404891968

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.18065404891968

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.055306911468506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.18065404891968

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.055306911468506

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.029552936553955

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043487548828125

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0003960132598877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.19695782661438

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0003960132598877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.19695782661438

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.00066018104553223

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0003960132598877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.19695782661438

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.00066018104553223

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021201848983765

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021201848983765

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012831687927246

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012831687927246

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013589859008789

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013589859008789

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.48074197769165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003972053527832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00040388107299805

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00045609474182129

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00034213066101074

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.00092005729675293

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00034213066101074

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.00092005729675293

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.001291036605835

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00034213066101074

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.00092005729675293

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.001291036605835

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='12' and  office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00038290023803711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00035881996154785

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00035881996154785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028395652770996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-05-10' and '2022-05-10' and  billing_master.office_id= 1         
 Execution Time:0.0016379356384277

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-05-10' and '2022-05-10' and  billing_master.office_id= 1         
 Execution Time:0.0016379356384277

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-05-10' and '2022-05-10' and  patient_registration.office_id= 1        
 Execution Time:0.00089406967163086

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-05-10' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0006558895111084

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-05-10' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0006558895111084

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-05-10' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0011050701141357

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-05-10' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.00070095062255859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-05-10' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.00070095062255859

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-05-10' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4 
 Execution Time:0.00096392631530762

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-01-01' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.0008699893951416

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-01-01' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.0008699893951416

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4 
 Execution Time:0.0030879974365234

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select * from ipdcharge where  ipdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select * from ipdcharge where  ipdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from ipdcharge where  ipdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-01-01' and '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4    
 Execution Time:0.0011870861053467

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4   
 Execution Time:0.0032110214233398

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from opdcharge where  opdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.061843156814575

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from opdcharge where  opdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from opdcharge where  opdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from opdcharge where  opdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00037288665771484

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from laser where  laser_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00040316581726074

select * from ipdcharge where  ipdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from ipdcharge where  ipdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select * from ipdcharge where  ipdcharge_id=15  and office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-01-01' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.001046895980835

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-01-01' and  '2022-05-10' and  billing_master.office_id= 1      and billing_master.doctor_id=4   
 Execution Time:0.001046895980835

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2021-01-01' and '2022-05-10' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=4 
 Execution Time:0.0027310848236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037193298339844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0028681755065918

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037193298339844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0028681755065918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037193298339844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0028681755065918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00071001052856445

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0003509521484375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0010969638824463

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0003509521484375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0010969638824463

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0003509521484375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0010969638824463

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00063800811767578

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00064492225646973

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00064492225646973

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=5  
 Execution Time:0.0045609474182129

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00064492225646973

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=5  
 Execution Time:0.0045609474182129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=5  
 Execution Time:0.001101016998291

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00064492225646973

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=5  
 Execution Time:0.0045609474182129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=5  
 Execution Time:0.001101016998291

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00088715553283691

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00055289268493652

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=11  
 Execution Time:0.0020639896392822

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00055289268493652

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=11  
 Execution Time:0.0020639896392822

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=11  
 Execution Time:0.00097393989562988

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00055289268493652

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=11  
 Execution Time:0.0020639896392822

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=11  
 Execution Time:0.00097393989562988

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='11' and  office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00063705444335938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0018298625946045

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00063705444335938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0018298625946045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.00076103210449219

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00063705444335938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0018298625946045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.00076103210449219

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='12' and  office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00031781196594238

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00031781196594238

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=13  
 Execution Time:0.00084114074707031

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00031781196594238

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=13  
 Execution Time:0.00084114074707031

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=13  
 Execution Time:0.00052118301391602

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00031781196594238

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=13  
 Execution Time:0.00084114074707031

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=13  
 Execution Time:0.00052118301391602

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042009353637695

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0011801719665527

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042009353637695

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0011801719665527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00058102607727051

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042009353637695

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0011801719665527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00058102607727051

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00076985359191895

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00058817863464355

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00058817863464355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0012729167938232

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00058817863464355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0012729167938232

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00065183639526367

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00058817863464355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0012729167938232

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00065183639526367

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014190673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014190673828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014190673828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00054812431335449

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00054812431335449

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00081086158752441

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027298927307129


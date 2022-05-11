select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010342121124268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010342121124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025379657745361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025379657745361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027751922607422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025379657745361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027751922607422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025379657745361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027751922607422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053200721740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092198848724365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025379657745361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027751922607422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053200721740723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027809143066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027809143066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022878646850586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038549900054932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0043289661407471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074601173400879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074601173400879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074601173400879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028460025787354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010938882827759

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074601173400879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028460025787354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0016047954559326

select city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0016181468963623

select address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0017969608306885

select source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0012569427490234

select print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.003040075302124

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0056400299072266

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0056400299072266

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00034403800964355

select appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0024838447570801

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00088810920715332

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00088810920715332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0049788951873779

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0049788951873779

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-12-21' and '2021-12-30' and  patient_registration.office_id= 1      
 Execution Time:0.0027711391448975


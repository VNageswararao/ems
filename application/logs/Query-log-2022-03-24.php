select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032100677490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032100677490234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024700164794922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023341178894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020771026611328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032100677490234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-24' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.0020520687103271

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-24' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.0020520687103271

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
		where billing=0 and appointment_date between  '2022-03-24' and '2022-03-24' and  patient_registration.office_id= 1      
 Execution Time:0.0038959980010986

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.0010809898376465

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.0010809898376465

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
		where billing=0 and appointment_date between  '2022-03-23' and '2022-03-24' and  patient_registration.office_id= 1      
 Execution Time:0.0024681091308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018019676208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018019676208496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018019676208496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018918514251709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018918514251709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018918514251709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018918514251709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089502334594727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018918514251709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089502334594727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.00068902969360352

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=606  
 Execution Time:0.0028681755065918

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.00068902969360352

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=606  
 Execution Time:0.0028681755065918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=606  
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.00068902969360352

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=606  
 Execution Time:0.0028681755065918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=606  
 Execution Time:0.00089502334594727

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='606' and  office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062298774719238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_appointment where  patient_registration_id = 606 and appointment_date= '2022-03-24' 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019321441650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019321441650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019321441650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019321441650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-24' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.001298189163208

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-24' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.001298189163208

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
		where billing=0 and appointment_date between  '2022-03-24' and '2022-03-24' and  patient_registration.office_id= 1      
 Execution Time:0.0041320323944092

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.00075006484985352

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-23' and  '2022-03-24' and  billing_master.office_id= 1        
 Execution Time:0.00075006484985352

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
		where billing=0 and appointment_date between  '2022-03-23' and '2022-03-24' and  patient_registration.office_id= 1      
 Execution Time:0.0021829605102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088191032409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088191032409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088191032409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079488754272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079488754272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00056004524230957

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023770332336426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023770332336426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087618827819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087618827819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087618827819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012099742889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012099742889404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012099742889404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00021219253540039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0046629905700684

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0046629905700684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030760765075684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0046629905700684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030760765075684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003309965133667

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0046629905700684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030760765075684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003309965133667

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 606 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 720 
 Execution Time:0.00032711029052734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 720  and `patient_registration_id` = 606 
 Execution Time:0.0025019645690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0044541358947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0044541358947754

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 636 
 Execution Time:0.00040006637573242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 721 
 Execution Time:0.00028681755065918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 721  and `patient_registration_id` = 636 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 606 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 720 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 720  and `patient_registration_id` = 606 
 Execution Time:0.00034880638122559

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 606 
 Execution Time:0.0017068386077881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.011911869049072

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.011911869049072

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071406364440918

select * from examination where examination_id= '642' and   office_id= '1' 
 Execution Time:0.0007021427154541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 642 
 Execution Time:0.013669967651367

select * from examination_chargesdetails where  examination_id= '642' 
 Execution Time:0.0036611557006836

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051689147949219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051689147949219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019588470458984

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019588470458984

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 636 
 Execution Time:0.00044107437133789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 721 
 Execution Time:0.00030183792114258

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 721  and `patient_registration_id` = 636 
 Execution Time:0.00038790702819824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 636 
 Execution Time:0.0014088153839111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select * from examination where examination_id= '643' and   office_id= '1' 
 Execution Time:0.00078892707824707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 643 
 Execution Time:0.0004580020904541

select * from examination_chargesdetails where  examination_id= '643' 
 Execution Time:0.00049495697021484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043916702270508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='51' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.004310131072998

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='53' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063204765319824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='107' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0085008144378662

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='97' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004570484161377

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075793266296387

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024268627166748

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024268627166748

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099897384643555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099897384643555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088214874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088214874267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091004371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088214874267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 639 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 724 
 Execution Time:0.00093698501586914

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 724  and `patient_registration_id` = 639 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 639 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 724 
 Execution Time:0.00027012825012207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 724  and `patient_registration_id` = 639 
 Execution Time:0.00032997131347656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 639 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010831356048584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010831356048584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from examination where examination_id= '644' and   office_id= '1' 
 Execution Time:0.00070285797119141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 644 
 Execution Time:0.00055098533630371

select * from examination_chargesdetails where  examination_id= '644' 
 Execution Time:0.00056195259094238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011811256408691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011811256408691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094008445739746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088095664978027

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088310241699219

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063896179199219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 640 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 725 
 Execution Time:0.00061511993408203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 725  and `patient_registration_id` = 640 
 Execution Time:0.0006098747253418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012681484222412

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 637 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 722 
 Execution Time:0.00031518936157227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 722  and `patient_registration_id` = 637 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 638 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 723 
 Execution Time:0.00024604797363281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 723  and `patient_registration_id` = 638 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087213516235352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087213516235352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064277648925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001237154006958

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011019706726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011019706726074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030231475830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030231475830078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043160915374756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045230388641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014588832855225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030231475830078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002302885055542

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 637 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 722 
 Execution Time:0.00024104118347168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 722  and `patient_registration_id` = 637 
 Execution Time:0.00059199333190918

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 637 
 Execution Time:0.0018019676208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003450870513916

select * from examination where examination_id= '646' and   office_id= '1' 
 Execution Time:0.0011870861053467

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 646 
 Execution Time:0.00060892105102539

select * from examination_chargesdetails where  examination_id= '646' 
 Execution Time:0.00042104721069336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093913078308105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093913078308105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023078918457031

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010080337524414

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056004524230957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020861625671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020861625671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020861625671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0020861625671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 641 
 Execution Time:0.0005791187286377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 726 
 Execution Time:0.00029301643371582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 726  and `patient_registration_id` = 641 
 Execution Time:0.00057291984558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 641 
 Execution Time:0.000701904296875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 726 
 Execution Time:0.0010011196136475

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 726  and `patient_registration_id` = 641 
 Execution Time:0.00097799301147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058128833770752

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058128833770752

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034298896789551

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 638 
 Execution Time:0.0024380683898926

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 723 
 Execution Time:0.001209020614624

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 723  and `patient_registration_id` = 638 
 Execution Time:0.00050902366638184

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 638 
 Execution Time:0.0013940334320068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select * from examination where examination_id= '647' and   office_id= '1' 
 Execution Time:0.00093793869018555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 647 
 Execution Time:0.00037312507629395

select * from examination_chargesdetails where  examination_id= '647' 
 Execution Time:0.0002751350402832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011323213577271

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011323213577271

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.014134883880615

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0032877922058105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 641 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 726 
 Execution Time:0.00030303001403809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 726  and `patient_registration_id` = 641 
 Execution Time:0.00025701522827148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 641 
 Execution Time:0.0018899440765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028705596923828

select * from examination where examination_id= '648' and   office_id= '1' 
 Execution Time:0.0028290748596191

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 648 
 Execution Time:0.0039258003234863

select * from examination_chargesdetails where  examination_id= '648' 
 Execution Time:0.00091218948364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010330677032471

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010330677032471

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066995620727539

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010001659393311

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009300708770752

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082802772521973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 640 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 725 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 725  and `patient_registration_id` = 640 
 Execution Time:0.00030779838562012

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 640 
 Execution Time:0.0015189647674561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from examination where examination_id= '645' and   office_id= '1' 
 Execution Time:0.0020840167999268

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 645 
 Execution Time:0.00031805038452148

select * from examination_chargesdetails where  examination_id= '645' 
 Execution Time:0.00033211708068848

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='72' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050997734069824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083112716674805

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='84' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00092005729675293

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='85' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072097778320312

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '618' and  office_id= '1' 
 Execution Time:0.0010349750518799

select count(*) as cnt from patient_registration where  patient_registration_id= '618' and  office_id= '1' 
 Execution Time:0.0010349750518799

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=618  
 Execution Time:0.0038070678710938

select count(*) as cnt from patient_registration where  patient_registration_id= '618' and  office_id= '1' 
 Execution Time:0.0010349750518799

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=618  
 Execution Time:0.0038070678710938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=618  
 Execution Time:0.0023601055145264

select count(*) as cnt from patient_registration where  patient_registration_id= '618' and  office_id= '1' 
 Execution Time:0.0010349750518799

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=618  
 Execution Time:0.0038070678710938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=618  
 Execution Time:0.0023601055145264

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='618' and  office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060081481933594

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060081481933594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_appointment where  patient_registration_id = 618 and appointment_date= '2022-03-24' 
 Execution Time:0.00094199180603027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019881725311279

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019881725311279

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001655101776123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019881725311279

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 618 
 Execution Time:0.00059390068054199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 694 
 Execution Time:0.00040483474731445

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 694  and `patient_registration_id` = 618 
 Execution Time:0.0019729137420654

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 618 
 Execution Time:0.0034730434417725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.019850015640259

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.019850015640259

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058069229125977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0086719989776611

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0086719989776611

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select * from examination where examination_id= '616' and   office_id= '1' 
 Execution Time:0.0019619464874268

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 616 
 Execution Time:0.004234790802002

select * from examination_chargesdetails where  examination_id= '616' 
 Execution Time:0.0041940212249756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0082991123199463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0082991123199463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099611282348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0082991123199463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select count(*) as cnt from patient_registration where  patient_registration_id= '379' and  office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_registration where  patient_registration_id= '379' and  office_id= '1' 
 Execution Time:0.00046896934509277

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=379  
 Execution Time:0.0023379325866699

select count(*) as cnt from patient_registration where  patient_registration_id= '379' and  office_id= '1' 
 Execution Time:0.00046896934509277

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=379  
 Execution Time:0.0023379325866699

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=379  
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_registration where  patient_registration_id= '379' and  office_id= '1' 
 Execution Time:0.00046896934509277

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=379  
 Execution Time:0.0023379325866699

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=379  
 Execution Time:0.00055408477783203

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='379' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081014633178711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081014633178711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from patient_appointment where  patient_registration_id = 379 and appointment_date= '2022-03-24' 
 Execution Time:0.0013949871063232

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003629207611084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003629207611084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003629207611084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.003629207611084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 618 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 727 
 Execution Time:0.00041985511779785

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 727  and `patient_registration_id` = 618 
 Execution Time:0.0011169910430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 618 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 727 
 Execution Time:0.00059819221496582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 727  and `patient_registration_id` = 618 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050718784332275

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0050718784332275

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001492977142334

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.00070905685424805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 728 
 Execution Time:0.00046086311340332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 728  and `patient_registration_id` = 379 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072469711303711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032320022583008

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032320022583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032320022583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032320022583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.0013749599456787

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 728 
 Execution Time:0.0019440650939941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 728  and `patient_registration_id` = 379 
 Execution Time:0.0030288696289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032229423522949

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032229423522949

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027709007263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 618 
 Execution Time:0.00097799301147461

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 727 
 Execution Time:0.00046896934509277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 727  and `patient_registration_id` = 618 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0007939338684082

SELECT *
FROM `examination`
WHERE `examination_id` = 649 
 Execution Time:0.0010669231414795

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00045299530029297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.0003361701965332

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00054192543029785

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=649 
 Execution Time:0.0055279731750488

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=649 
 Execution Time:0.0010662078857422

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=649 
 Execution Time:0.00072407722473145

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=649 
 Execution Time:0.0013570785522461

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='649' and office_id='1' 
 Execution Time:0.0021939277648926

select * from examination_chargesdetails where  examination_id= '649' 
 Execution Time:0.0017261505126953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 728 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 728  and `patient_registration_id` = 379 
 Execution Time:0.0010421276092529

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 379 
 Execution Time:0.0014088153839111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from examination where examination_id= '649' and   office_id= '1' 
 Execution Time:0.00058579444885254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 649 
 Execution Time:0.00036311149597168

select * from examination_chargesdetails where  examination_id= '649' 
 Execution Time:0.00026488304138184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001086950302124

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001086950302124

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00060319900512695

SELECT *
FROM `examination`
WHERE `examination_id` = 642 
 Execution Time:0.0011129379272461

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00052595138549805

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0007472038269043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 606 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00030112266540527

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=642 
 Execution Time:0.0012857913970947

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=642 
 Execution Time:0.00074911117553711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=642 
 Execution Time:0.0005640983581543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=642 
 Execution Time:0.00061702728271484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='642' and office_id='1' 
 Execution Time:0.0013420581817627

select * from examination_chargesdetails where  examination_id= '642' 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 618 
 Execution Time:0.00059199333190918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 727 
 Execution Time:0.00039911270141602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 727  and `patient_registration_id` = 618 
 Execution Time:0.00055193901062012

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 618 
 Execution Time:0.0018630027770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select * from examination where examination_id= '650' and   office_id= '1' 
 Execution Time:0.0039069652557373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 650 
 Execution Time:0.00065112113952637

select * from examination_chargesdetails where  examination_id= '650' 
 Execution Time:0.00043201446533203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009620189666748

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009620189666748

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.00039291381835938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 728 
 Execution Time:0.00037693977355957

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 728  and `patient_registration_id` = 379 
 Execution Time:0.00093579292297363

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 379 
 Execution Time:0.0040168762207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select * from examination where examination_id= '649' and   office_id= '1' 
 Execution Time:0.0044679641723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036370754241943

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 649 
 Execution Time:0.0039269924163818

select * from examination_chargesdetails where  examination_id= '649' 
 Execution Time:0.0011129379272461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013930797576904

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013930797576904

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085592269897461

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038418769836426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038418769836426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031490325927734

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026979446411133

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096487998962402


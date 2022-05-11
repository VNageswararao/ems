select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065970420837402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065970420837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065970420837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042159557342529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065970420837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042159557342529

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028829574584961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044519901275635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065970420837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042159557342529

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028829574584961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011838912963867

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2462' and  office_id= '1' 
 Execution Time:0.00063705444335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031149387359619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031149387359619

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031149387359619

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038480758666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040559768676758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009920597076416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003870964050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003870964050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003870964050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003870964050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-06' and  '2021-12-06' and  billing_master.office_id= 1        
 Execution Time:0.0022139549255371

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-06' and  '2021-12-06' and  billing_master.office_id= 1        
 Execution Time:0.0022139549255371

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-06' and '2021-12-06' and  patient_registration.office_id= 1      
 Execution Time:0.0046570301055908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062339305877686

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019311904907227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071096420288086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026957988739014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053210258483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037479400634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013170957565308

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028989315032959

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028989315032959

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2829' and  office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061221122741699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061221122741699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061221122741699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061221122741699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061221122741699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028219223022461

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028219223022461

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2829' and  office_id= '1' 
 Execution Time:0.00026106834411621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044739246368408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044739246368408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044739246368408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044739246368408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044739246368408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044040679931641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010719299316406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010719299316406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058839321136475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058839321136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058839321136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058839321136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058839321136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0088632106781006

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0088632106781006

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2829' and  office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026199817657471

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026199817657471

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056450366973877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056450366973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056450366973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056450366973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056450366973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042078495025635

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025320053100586

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059609413146973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065708160400391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080513954162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059118270874023

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050902366638184

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046420097351074

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046420097351074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037109851837158

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040388107299805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00016999244689941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017786026000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034859180450439

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042104721069336

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011138916015625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011138916015625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067615509033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004486083984375

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3228' and  office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from patient_followup where  patient_registration_id = '3228' and patient_followup_date='2021-12-07' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3071' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034699440002441

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3071' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034699440002441

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3071' and  office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012688636779785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012688636779785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018150806427002

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043296813964844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098204612731934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098204612731934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077915191650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066461563110352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075979232788086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066781044006348

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066781044006348

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.0007021427154541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021195411682129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017850399017334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017850399017334

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082087516784668

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082087516784668

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056228637695312

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045299530029297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036768913269043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00118088722229

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00118088722229

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020461082458496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066871643066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069141387939453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069141387939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069141387939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069141387939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069141387939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select count(*) as cnt from patient_registration where  patient_registration_id= '3228' and  office_id= '1' 
 Execution Time:0.00094985961914062

select count(*) as cnt from patient_registration where  patient_registration_id= '3228' and  office_id= '1' 
 Execution Time:0.00094985961914062

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3228' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054869651794434

select count(*) as cnt from patient_registration where  patient_registration_id= '3228' and  office_id= '1' 
 Execution Time:0.00094985961914062

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3228' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054869651794434

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3228' and  office_id= '1' 
 Execution Time:0.00058317184448242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032320022583008

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020718574523926

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023581981658936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076413154602051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058388710021973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00010895729064941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00010895729064941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011920928955078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00010895729064941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011920928955078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00010895729064941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011920928955078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00010895729064941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011920928955078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00013399124145508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061850547790527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.00472092628479

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.00472092628479

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3242' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0006098747253418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004194974899292

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044891834259033

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00035619735717773

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00035619735717773

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00015497207641602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040500164031982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057709217071533

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057709217071533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057709217071533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057709217071533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057709217071533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3229' and  doctors_registration.office_id= '1' 
 Execution Time:0.002687931060791

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3229' and  doctors_registration.office_id= '1' 
 Execution Time:0.002687931060791

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3229' and  office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062918663024902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062918663024902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0009150505065918

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015807151794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015807151794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015807151794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015807151794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049009323120117

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057380199432373

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020694732666016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036389827728271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036389827728271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036389827728271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036389827728271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036389827728271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064117908477783

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026917457580566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046770572662354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037622451782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023317337036133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060479640960693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select count(*) as cnt from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.0006098747253418

select * from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.0006098747253418

select * from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.00040197372436523

select * from billing_detail where  billing_master_id= '554' 
 Execution Time:0.00084209442138672

select count(*) as cnt from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.0006098747253418

select * from billing_master where  billing_master_id= '554' and  office_id= '1' 
 Execution Time:0.00040197372436523

select * from billing_detail where  billing_master_id= '554' 
 Execution Time:0.00084209442138672

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015039443969727

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015039443969727

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0027918815612793

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00040793418884277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028607845306396

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00040793418884277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028607845306396

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3242' and  office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00041818618774414

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00041818618774414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050978660583496

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00041818618774414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050978660583496

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3242' and  office_id= '1' 
 Execution Time:0.00148606300354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094060897827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094060897827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094060897827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094060897827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094060897827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004342794418335

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004342794418335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004342794418335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004342794418335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004342794418335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_registration where  patient_registration_id= '3230' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_registration where  patient_registration_id= '3230' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3230' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031979084014893

select count(*) as cnt from patient_registration where  patient_registration_id= '3230' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3230' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031979084014893

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3230' and  office_id= '1' 
 Execution Time:0.00067591667175293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0017709732055664

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0017709732055664

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      
 Execution Time:0.0047228336334229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064480304718018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090138912200928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090138912200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090138912200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028219223022461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090138912200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028219223022461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036971569061279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090138912200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028219223022461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036971569061279

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select count(*) as cnt from patient_registration where  patient_registration_id= '3244' and  office_id= '1' 
 Execution Time:0.0024480819702148

select count(*) as cnt from patient_registration where  patient_registration_id= '3244' and  office_id= '1' 
 Execution Time:0.0024480819702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3244' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052471160888672

select count(*) as cnt from patient_registration where  patient_registration_id= '3244' and  office_id= '1' 
 Execution Time:0.0024480819702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3244' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052471160888672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3244' and  office_id= '1' 
 Execution Time:0.00075817108154297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021278858184814

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021278858184814

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029609203338623

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.0021579265594482

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057430267333984

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006493091583252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053715705871582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053715705871582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035810470581055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041401386260986

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032901763916016

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053596496582031

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032951831817627

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032951831817627

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024030208587646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042960643768311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023958683013916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023958683013916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023958683013916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026750564575195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023958683013916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072259902954102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040979385375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040979385375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040979385375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040979385375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040979385375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003352165222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023984909057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041251182556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058958530426025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057077407836914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057077407836914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062668323516846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028014183044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045149326324463

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004420280456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052130222320557

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036478042602539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047729015350342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072739124298096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072739124298096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072739124298096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072739124298096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072739124298096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '3241' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from patient_registration where  patient_registration_id= '3241' and  office_id= '1' 
 Execution Time:0.00037288665771484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041911602020264

select count(*) as cnt from patient_registration where  patient_registration_id= '3241' and  office_id= '1' 
 Execution Time:0.00037288665771484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041911602020264

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3241' and  office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006227970123291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006227970123291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006227970123291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006227970123291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006227970123291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00030517578125

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0001518726348877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054149627685547

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032305717468262

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024080276489258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082149505615234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066628456115723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066628456115723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066628456115723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066628456115723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066628456115723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select count(*) as cnt from patient_registration where  patient_registration_id= '3247' and  office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_registration where  patient_registration_id= '3247' and  office_id= '1' 
 Execution Time:0.0003969669342041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057518482208252

select count(*) as cnt from patient_registration where  patient_registration_id= '3247' and  office_id= '1' 
 Execution Time:0.0003969669342041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057518482208252

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3247' and  office_id= '1' 
 Execution Time:0.0008242130279541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049550533294678

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067272186279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067272186279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067272186279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067272186279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067272186279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061800479888916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031611919403076

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031611919403076

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3240' and  office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031869411468506

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031869411468506

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from patient_registration where  patient_registration_id= '3246' and  office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from patient_registration where  patient_registration_id= '3246' and  office_id= '1' 
 Execution Time:0.00066208839416504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049669742584229

select count(*) as cnt from patient_registration where  patient_registration_id= '3246' and  office_id= '1' 
 Execution Time:0.00066208839416504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049669742584229

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3246' and  office_id= '1' 
 Execution Time:0.00098490715026855

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060329437255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060329437255859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060329437255859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060329437255859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060329437255859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014259815216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063550472259521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063791275024414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010199546813965

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010199546813965

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033490657806396

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025649070739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025649070739746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039949417114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025649070739746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039949417114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074079036712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072979927062988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072979927062988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072979927062988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072979927062988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028059482574463

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028059482574463

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='567' and  office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035901069641113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035901069641113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035901069641113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041317939758301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064229965209961

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.0006108283996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032658576965332

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.0006108283996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032658576965332

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='567' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select count(*) as cnt from patient_registration where  patient_registration_id= '3162' and  office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from patient_registration where  patient_registration_id= '3162' and  office_id= '1' 
 Execution Time:0.00041484832763672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3162' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030019283294678

select count(*) as cnt from patient_registration where  patient_registration_id= '3162' and  office_id= '1' 
 Execution Time:0.00041484832763672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3162' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030019283294678

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3162' and  office_id= '1' 
 Execution Time:0.0018689632415771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023150444030762

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052213668823242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052213668823242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062704086303711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014469623565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014469623565674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014469623565674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014469623565674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014469623565674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043811798095703

select count(*) as cnt from patient_registration where  patient_registration_id= '3147' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_registration where  patient_registration_id= '3147' and  office_id= '1' 
 Execution Time:0.0004429817199707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044591426849365

select count(*) as cnt from patient_registration where  patient_registration_id= '3147' and  office_id= '1' 
 Execution Time:0.0004429817199707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044591426849365

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3147' and  office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014889240264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014889240264893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014889240264893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014889240264893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028250217437744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014889240264893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003788948059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069739818572998

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.00024795532226562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028970241546631

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.00024795532226562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028970241546631

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3146' and  office_id= '1' 
 Execution Time:0.00020503997802734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00041913986206055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042319297790527

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00041913986206055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042319297790527

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026321411132812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058128833770752

select count(*) as cnt from patient_registration where  patient_registration_id= '3058' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '3058' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3058' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050451755523682

select count(*) as cnt from patient_registration where  patient_registration_id= '3058' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3058' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050451755523682

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3058' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075888633728027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075888633728027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025670528411865

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025670528411865

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074248313903809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080585479736328

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080585479736328

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078988075256348

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00031304359436035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067391395568848

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00036382675170898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073449611663818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041959285736084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041959285736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041959285736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041959285736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041959285736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3233' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044121742248535

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3233' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044121742248535

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3233' and  office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095796585083008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095796585083008

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029993057250977

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0034348964691162

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00064182281494141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068001747131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018811225891113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018811225891113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018811225891113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018811225891113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00589919090271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005742073059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095701217651367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095701217651367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058789253234863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066120624542236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042986869812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096607208251953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041160583496094

select count(*) as cnt from patient_registration where  patient_registration_id= '3057' and  office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '3057' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3057' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028610229492188

select count(*) as cnt from patient_registration where  patient_registration_id= '3057' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3057' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028610229492188

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3057' and  office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062108039855957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071060657501221

select count(*) as cnt from patient_registration where  patient_registration_id= '3002' and  office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_registration where  patient_registration_id= '3002' and  office_id= '1' 
 Execution Time:0.00057697296142578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3002' and  doctors_registration.office_id= '1' 
 Execution Time:0.003087043762207

select count(*) as cnt from patient_registration where  patient_registration_id= '3002' and  office_id= '1' 
 Execution Time:0.00057697296142578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3002' and  doctors_registration.office_id= '1' 
 Execution Time:0.003087043762207

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3002' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095701217651367

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095701217651367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056886672973633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056886672973633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090312957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054371356964111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090312957763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062038898468018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002751350402832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002751350402832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002751350402832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002751350402832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066609382629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038840770721436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042719841003418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057730674743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057570934295654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057570934295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0045959949493408

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0088880062103271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076189041137695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076189041137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076189041137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076189041137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076189041137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010289907455444

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010289907455444

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010289907455444

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010289907455444

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010289907455444

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.0026369094848633

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.0026369094848633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057778358459473

select count(*) as cnt from patient_registration where  patient_registration_id= '3146' and  office_id= '1' 
 Execution Time:0.0026369094848633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057778358459473

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3146' and  office_id= '1' 
 Execution Time:0.0037429332733154

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034639835357666

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00059318542480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075139999389648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075139999389648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075139999389648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075139999389648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075139999389648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034201145172119

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025789737701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063469409942627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032730102539062

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032730102539062

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017929077148438

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006101131439209

select count(*) as cnt from patient_registration where  patient_registration_id= '2157' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '2157' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2157' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049750804901123

select count(*) as cnt from patient_registration where  patient_registration_id= '2157' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2157' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049750804901123

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2157' and  office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049591064453125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010550022125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010550022125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010550022125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027410984039307

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022008419036865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010550022125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055480003356934

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055480003356934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006260871887207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006260871887207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0092411041259766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014870166778564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014870166778564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014870166778564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014870166778564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014870166778564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060460567474365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060470104217529

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014438629150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044629573822021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040581226348877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00016903877258301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000518798828125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029938220977783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0040838718414307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060651302337646

select count(*) as cnt from patient_registration where  patient_registration_id= '990' and  office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_registration where  patient_registration_id= '990' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='990' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044858455657959

select count(*) as cnt from patient_registration where  patient_registration_id= '990' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='990' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044858455657959

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='990' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015377998352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015377998352051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015377998352051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040860176086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064501762390137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064501762390137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064501762390137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064501762390137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064501762390137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071401596069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071401596069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071401596069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071401596069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071401596069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00035786628723145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029811859130859

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00035786628723145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029811859130859

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00029706954956055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037910938262939

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00029706954956055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037910938262939

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058529376983643

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029683113098145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034220218658447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034220218658447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017669200897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034220218658447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017669200897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034220218658447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017669200897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014569759368896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078680515289307

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002169132232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002169132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002169132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002169132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002169132232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069148540496826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011367797851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011367797851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011367797851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015361309051514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011367797851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088405609130859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054190158843994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068337917327881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068337917327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068337917327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068337917327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068337917327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select count(*) as cnt from patient_registration where  patient_registration_id= '3133' and  office_id= '1' 
 Execution Time:0.00054621696472168

select count(*) as cnt from patient_registration where  patient_registration_id= '3133' and  office_id= '1' 
 Execution Time:0.00054621696472168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3133' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044569969177246

select count(*) as cnt from patient_registration where  patient_registration_id= '3133' and  office_id= '1' 
 Execution Time:0.00054621696472168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3133' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044569969177246

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3133' and  office_id= '1' 
 Execution Time:0.00049781799316406

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034689903259277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012321949005127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012321949005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066423416137695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012321949005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066423416137695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012321949005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066423416137695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012321949005127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066423416137695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063521862030029

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3133' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090885162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090885162353516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040011405944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040011405944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0045530796051025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007112979888916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007112979888916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select count(*) as cnt from patient_registration where  patient_registration_id= '2816' and  office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_registration where  patient_registration_id= '2816' and  office_id= '1' 
 Execution Time:0.00050592422485352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2816' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030920505523682

select count(*) as cnt from patient_registration where  patient_registration_id= '2816' and  office_id= '1' 
 Execution Time:0.00050592422485352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2816' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030920505523682

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2816' and  office_id= '1' 
 Execution Time:0.00023984909057617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081992149353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032930374145508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032930374145508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026631355285645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052640438079834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061678886413574

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061678886413574

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053198337554932

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031020641326904

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031020641326904

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2204' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039219856262207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039830207824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014679431915283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014679431915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014679431915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014679431915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014679431915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066139698028564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021560192108154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021560192108154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021560192108154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021560192108154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036180019378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052621364593506

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021560192108154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036180019378662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087840557098389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042309761047363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042309761047363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042309761047363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042309761047363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015110969543457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042309761047363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015110969543457

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026040077209473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002161979675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026040077209473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459


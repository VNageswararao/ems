select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022158622741699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.0046710968017578

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.0046710968017578

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-11' and '2021-11-11' and  patient_registration.office_id= 1      
 Execution Time:0.0048739910125732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.001323938369751

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.001323938369751

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-11' and '2021-11-11' and  patient_registration.office_id= 1      
 Execution Time:0.0029511451721191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025229454040527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025229454040527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085310935974121

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003201961517334

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050220489501953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050220489501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050220489501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050220489501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.0009920597076416

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-11' and  '2021-11-11' and  billing_master.office_id= 1        
 Execution Time:0.0009920597076416

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-11' and '2021-11-11' and  patient_registration.office_id= 1      
 Execution Time:0.0027408599853516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016729831695557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016729831695557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023090839385986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016729831695557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023090839385986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016729831695557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023090839385986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019469261169434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016729831695557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023090839385986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019469261169434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047471523284912

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.00076508522033691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2254' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024311542510986

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.00076508522033691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2254' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024311542510986

select fname,lname,mrdno from patient_registration where  patient_registration_id='2254' and  office_id= '1' 
 Execution Time:0.0010058879852295

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.006648063659668

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.006648063659668

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_registration where  patient_registration_id= '2159' and  office_id= '1' 
 Execution Time:0.0020771026611328

select count(*) as cnt from patient_registration where  patient_registration_id= '2159' and  office_id= '1' 
 Execution Time:0.0020771026611328

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2159' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055739879608154

select count(*) as cnt from patient_registration where  patient_registration_id= '2159' and  office_id= '1' 
 Execution Time:0.0020771026611328

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2159' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055739879608154

select fname,lname,mrdno from patient_registration where  patient_registration_id='2159' and  office_id= '1' 
 Execution Time:0.0037648677825928

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003201961517334

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044529438018799

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007469654083252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007469654083252

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074887275695801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048818588256836

select count(*) as cnt from patient_registration where  patient_registration_id= '2131' and  office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from patient_registration where  patient_registration_id= '2131' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2131' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021140575408936

select count(*) as cnt from patient_registration where  patient_registration_id= '2131' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2131' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021140575408936

select fname,lname,mrdno from patient_registration where  patient_registration_id='2131' and  office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064611434936523

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064611434936523

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000457763671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047516822814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017619132995605

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017619132995605

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043370723724365

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002291202545166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017201900482178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011820793151855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077414512634277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077414512634277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018501281738281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00078582763671875

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00078582763671875

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093507766723633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079140663146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select count(*) as cnt from patient_registration where  patient_registration_id= '2413' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '2413' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2413' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034961700439453

select count(*) as cnt from patient_registration where  patient_registration_id= '2413' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2413' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034961700439453

select fname,lname,mrdno from patient_registration where  patient_registration_id='2413' and  office_id= '1' 
 Execution Time:0.0026431083679199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013401508331299

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013401508331299

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00064778327941895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058648586273193

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058648586273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058648586273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058648586273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058648586273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045359134674072

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039710998535156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078010559082031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0018301010131836

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0018301010131836

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042808055877686

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007469654083252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007469654083252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007331371307373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072216987609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044419765472412

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='352' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024309158325195

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='352' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024309158325195

select fname,lname,mrdno from patient_registration where  patient_registration_id='352' and  office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039410591125488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071310997009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071310997009277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023508071899414

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00029897689819336

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00021481513977051

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040197372436523

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00020790100097656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001662015914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016958713531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057506561279297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001662015914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065240859985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079703330993652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079703330993652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079703330993652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079703330993652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004572868347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078320503234863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078320503234863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011260509490967

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011260509490967

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044639110565186

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023329257965088

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023329257965088

select fname,lname,mrdno from patient_registration where  patient_registration_id='2147' and  office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011200904846191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011200904846191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011200904846191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011200904846191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059671401977539

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006709098815918

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021729469299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021729469299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021729469299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021729469299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021729469299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068981647491455

select count(*) as cnt from patient_registration where  patient_registration_id= '1672' and  office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_registration where  patient_registration_id= '1672' and  office_id= '1' 
 Execution Time:0.00051403045654297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1672' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024640560150146

select count(*) as cnt from patient_registration where  patient_registration_id= '1672' and  office_id= '1' 
 Execution Time:0.00051403045654297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1672' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024640560150146

select fname,lname,mrdno from patient_registration where  patient_registration_id='1672' and  office_id= '1' 
 Execution Time:0.0036838054656982

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068440437316895

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018310546875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055193901062012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055193901062012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055193901062012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013818740844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055193901062012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013818740844727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049800872802734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071501731872559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030901432037354

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040388107299805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023484230041504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020380020141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020380020141602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013980865478516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021929740905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021929740905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021929740905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021929740905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021929740905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043392181396484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002640962600708

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00028204917907715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020949840545654

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.00028204917907715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020949840545654

select fname,lname,mrdno from patient_registration where  patient_registration_id='2284' and  office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062394142150879

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062394142150879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050439834594727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050439834594727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036740303039551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050439834594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001227855682373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001227855682373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001227855682373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050621032714844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048699378967285

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018692016601562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067615509033203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067615509033203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013558864593506

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013558864593506

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011258125305176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011258125305176

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033149719238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034389495849609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034389495849609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034389495849609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034389495849609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037410259246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034389495849609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037410259246826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070528984069824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078582763671875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078582763671875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038409233093262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036988258361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00325608253479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00325608253479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00325608253479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00325608253479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034289360046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024142265319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00325608253479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034289360046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049810409545898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059795379638672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096487998962402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098586082458496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098586082458496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036351680755615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036351680755615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036351680755615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029721260070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036351680755615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029721260070801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060551166534424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004727840423584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004727840423584

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087714195251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087714195251465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select count(*) as cnt from patient_registration where  patient_registration_id= '2424' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '2424' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2424' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040309429168701

select count(*) as cnt from patient_registration where  patient_registration_id= '2424' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2424' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040309429168701

select fname,lname,mrdno from patient_registration where  patient_registration_id='2424' and  office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019381046295166

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019381046295166

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030062198638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030062198638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030062198638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011599063873291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078892707824707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030062198638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011599063873291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063619613647461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054097175598145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011599063873291

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011599063873291

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038011074066162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038011074066162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038011074066162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038011074066162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005936861038208

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042319297790527

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026290416717529

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026290416717529

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038328170776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031101703643799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031101703643799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010028123855591

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010028123855591

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014011859893799

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052213668823242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052213668823242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033059120178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033059120178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002100944519043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033059120178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002100944519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044400691986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033059120178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002100944519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044400691986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039899349212646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033059120178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002100944519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044400691986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039899349212646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004741907119751

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2333' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032310485839844

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2333' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032310485839844

select fname,lname,mrdno from patient_registration where  patient_registration_id='2333' and  office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028772354125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052111148834229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052111148834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059769153594971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052111148834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059769153594971

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022811889648438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052111148834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059769153594971

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022811889648438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0059120655059814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052111148834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059769153594971

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022811889648438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0059120655059814

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036149024963379

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040490627288818

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040490627288818

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039122104644775

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040490627288818

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039122104644775

select fname,lname,mrdno from patient_registration where  patient_registration_id='2284' and  office_id= '1' 
 Execution Time:0.0035960674285889

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087714195251465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087714195251465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034708976745605

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0028741359710693

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0043601989746094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029668807983398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029668807983398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029668807983398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029668807983398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029668807983398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042819976806641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042819976806641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042819976806641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042819976806641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048959255218506

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062918663024902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062918663024902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027859210968018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027859210968018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002816915512085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027859210968018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002816915512085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027859210968018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002816915512085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027859210968018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002816915512085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043280124664307

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003972053527832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003972053527832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018341541290283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018341541290283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018341541290283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018341541290283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010688304901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031538009643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018341541290283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010688304901123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054807662963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095295906066895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095295906066895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085115432739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085115432739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046989917755127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016870498657227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016870498657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016870498657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016870498657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057315826416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047128200531006

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039751529693604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039751529693604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003803014755249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039751529693604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003803014755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033798217773438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039751529693604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003803014755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033798217773438

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022108554840088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039751529693604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003803014755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033798217773438

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022108554840088

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0096640586853027

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049805641174316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031328201293945

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031328201293945

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019409656524658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053095817565918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053095817565918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053095817565918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053095817565918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052361488342285

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from patient_registration where  patient_registration_id= '2320' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '2320' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2320' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044631958007812

select count(*) as cnt from patient_registration where  patient_registration_id= '2320' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2320' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044631958007812

select fname,lname,mrdno from patient_registration where  patient_registration_id='2320' and  office_id= '1' 
 Execution Time:0.0037810802459717

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011818408966064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011818408966064

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003633975982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003633975982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067839622497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003633975982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067839622497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011035203933716

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003633975982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067839622497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011035203933716

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.006659984588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053610801696777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003633975982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067839622497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011035203933716

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.006659984588623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059249401092529

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037999153137207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037999153137207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039551258087158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029480457305908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069589614868164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0080990791320801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0080990791320801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0080990791320801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0080990791320801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099492073059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013324022293091

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.022098064422607

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.022098064422607

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0018599033355713

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034849643707275

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034849643707275

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029699802398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072200298309326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072200298309326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072200298309326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046799182891846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072200298309326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046799182891846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028281211853027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047190189361572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024771690368652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072200298309326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046799182891846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028281211853027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00062394142150879

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00062394142150879

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0035490989685059

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0035490989685059

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092816352844238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092816352844238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028820037841797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038249492645264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038249492645264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038249492645264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038249492645264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013439655303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047001838684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078878402709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038249492645264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013439655303955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068550109863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042679309844971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044500827789307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004533052444458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004533052444458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004533052444458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004533052444458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015869140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004533052444458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015869140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002816915512085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00020790100097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028238296508789

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.021867990493774

select * from medicine_instruction where medicine_instruction_id='2' and office_id= '1' 
 Execution Time:0.00093483924865723

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select * from medicine_instruction where medicine_instruction_id='2' and office_id= '1' 
 Execution Time:0.00082206726074219

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062012672424316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029811859130859

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0053400993347168

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select count(*) as cnt from medicine where  name = 'sdsd' and office_id= '1' 
 Execution Time:0.0026700496673584

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00053787231445312

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00044608116149902

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00068306922912598

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='6' and  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select * from medicine_instruction where medicine_instruction_id='2' and office_id= '1' 
 Execution Time:0.00055384635925293

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0045819282531738

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.0041429996490479

select medicine_instruction_id,name,days from  medicine_instruction where category_id='6' and  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from medicine where  name = 'tewt' and office_id= '1' 
 Execution Time:0.00041103363037109

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00069594383239746

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00069594383239746

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0015778541564941

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00047397613525391

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.001478910446167

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.001478910446167

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00067806243896484

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00061392784118652

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00052213668823242

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00051307678222656

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.0013999938964844

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.0033330917358398

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0033500194549561

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00061297416687012

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.001046895980835

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00043892860412598

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.003061056137085

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0051600933074951

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0051600933074951

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0070540904998779

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.004349946975708

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00075387954711914

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.001298189163208

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.0067498683929443

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0035660266876221

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0032639503479004

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0032639503479004

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.0018088817596436

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_instruction_id,name,days from  medicine_instruction where category_id='7' and  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='5' and  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select medicine_instruction_id,name,days from  medicine_instruction where category_id='6' and  office_id= '1' and status=1 
 Execution Time:0.0019230842590332

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00046896934509277

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0040609836578369

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.00058889389038086

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.0020780563354492

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00039887428283691

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='6' and  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select count(*) as cnt from medicine_instruction where  name = 'dfgdfg' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from medicine_instruction where  name = 'reterter' and office_id= '1' 
 Execution Time:0.00040197372436523

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0069859027862549

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from medicine where  name = 'trt' and office_id= '1' 
 Execution Time:0.00081396102905273

select * from medicine where medicine_id='3' and office_id= '1' 
 Execution Time:0.00070905685424805

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0038719177246094

select * from medicine where medicine_id='2' and office_id= '1' 
 Execution Time:0.0044350624084473

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select * from medicine where medicine_id='1' and office_id= '1' 
 Execution Time:0.00052809715270996

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select * from medicine where medicine_id='3' and office_id= '1' 
 Execution Time:0.00051379203796387

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0075628757476807

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0075628757476807

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.0039570331573486

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0063290596008301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063650608062744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0063290596008301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063650608062744

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0021529197692871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048611164093018

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00078701972961426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0032060146331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019991397857666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0019659996032715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018041133880615

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005950927734375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057101249694824

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0037610530853271

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005497932434082

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012931823730469

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010318756103516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0036818981170654

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071310997009277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072717666625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016360282897949

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069403648376465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052690505981445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055193901062012


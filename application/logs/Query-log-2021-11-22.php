select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086631774902344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086631774902344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086631774902344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.046272039413452

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086631774902344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.046272039413452

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.057711124420166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-21' and  '2021-11-21' and  billing_master.office_id= 1        
 Execution Time:0.0023701190948486

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-21' and  '2021-11-21' and  billing_master.office_id= 1        
 Execution Time:0.0023701190948486

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-21' and '2021-11-21' and  patient_registration.office_id= 1      
 Execution Time:0.0068190097808838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034968852996826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034968852996826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034968852996826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031788349151611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034968852996826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031788349151611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044040679931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02628493309021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010820150375366

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010749816894531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034968852996826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031788349151611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044040679931641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008882999420166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037198066711426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037198066711426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036511421203613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034029483795166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034029483795166

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001121997833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034120082855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054571628570557

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018990039825439

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018990039825439

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021240711212158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0070559978485107

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0070559978485107

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017659664154053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055661201477051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005979061126709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005979061126709

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002295970916748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002295970916748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011470317840576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011470317840576

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011470317840576

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011470317840576

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051641464233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053479671478271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011470317840576

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002769947052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0096287727355957

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-18' and  '2021-11-18' and  billing_master.office_id= 1        
 Execution Time:0.0019810199737549

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-18' and  '2021-11-18' and  billing_master.office_id= 1        
 Execution Time:0.0019810199737549

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-18' and '2021-11-18' and  patient_registration.office_id= 1      
 Execution Time:0.0058350563049316

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-18' and  '2021-11-18' and  billing_master.office_id= 1        
 Execution Time:0.0031218528747559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-18' and  '2021-11-18' and  billing_master.office_id= 1        
 Execution Time:0.0031218528747559

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-18' and '2021-11-18' and  patient_registration.office_id= 1      
 Execution Time:0.0049088001251221

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031130313873291

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031130313873291

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0046970844268799

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0019609928131104

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0019609928131104

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0064899921417236

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0019710063934326

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0019710063934326

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0064370632171631

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0019710063934326

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0064370632171631

select fname,lname,mrdno from patient_registration where  patient_registration_id='2446' and  office_id= '1' 
 Execution Time:0.003964900970459

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034439563751221

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034439563751221

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015380382537842

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0012500286102295

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0012500286102295

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2337' and  doctors_registration.office_id= '1' 
 Execution Time:0.005885124206543

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0012500286102295

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2337' and  doctors_registration.office_id= '1' 
 Execution Time:0.005885124206543

select fname,lname,mrdno from patient_registration where  patient_registration_id='2337' and  office_id= '1' 
 Execution Time:0.00074219703674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087904930114746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087904930114746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071907043457031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071907043457031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.01004695892334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094485282897949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094485282897949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015101432800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015101432800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015101432800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015609264373779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015101432800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015609264373779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052318572998047

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00058484077453613

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00058484077453613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027518272399902

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00058484077453613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027518272399902

select fname,lname,mrdno from patient_registration where  patient_registration_id='2604' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040700435638428

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040700435638428

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044701099395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094413757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094413757324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094413757324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094413757324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037357807159424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094413757324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037357807159424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047471523284912

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072693824768066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072693824768066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054419040679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035960674285889

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035960674285889

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037739276885986

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074288845062256

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010428428649902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010428428649902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016269683837891

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055208206176758

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055208206176758

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088250637054443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048120021820068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048120021820068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018181800842285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010688304901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054788589477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048120021820068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018181800842285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057070255279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032708644866943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032708644866943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031876564025879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038011074066162

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038011074066162

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010781288146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086569786071777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086569786071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026471614837646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086569786071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026471614837646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0055358409881592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086569786071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026471614837646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0055358409881592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032358169555664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086569786071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026471614837646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0055358409881592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032358169555664

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select count(*) as cnt from patient_registration where  patient_registration_id= '2450' and  office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from patient_registration where  patient_registration_id= '2450' and  office_id= '1' 
 Execution Time:0.00044488906860352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041210651397705

select count(*) as cnt from patient_registration where  patient_registration_id= '2450' and  office_id= '1' 
 Execution Time:0.00044488906860352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041210651397705

select fname,lname,mrdno from patient_registration where  patient_registration_id='2450' and  office_id= '1' 
 Execution Time:0.003587007522583

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031790733337402

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031790733337402

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00085711479187012

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00085711479187012

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025880336761475

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025880336761475

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014491081237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014491081237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014491081237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036880970001221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014491081237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036880970001221

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019800662994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014491081237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036880970001221

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019800662994385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086548328399658

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00081300735473633

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038051605224609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038051605224609

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028481483459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010068416595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010068416595459

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010068416595459

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010068416595459

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010068416595459

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002892017364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075750350952148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077390670776367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077390670776367

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049259662628174

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049259662628174

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031158924102783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094699859619141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094699859619141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094699859619141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094699859619141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045819282531738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065839290618896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select count(*) as cnt from patient_registration where  patient_registration_id= '2728' and  office_id= '1' 
 Execution Time:0.0035231113433838

select count(*) as cnt from patient_registration where  patient_registration_id= '2728' and  office_id= '1' 
 Execution Time:0.0035231113433838

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2728' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078620910644531

select count(*) as cnt from patient_registration where  patient_registration_id= '2728' and  office_id= '1' 
 Execution Time:0.0035231113433838

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2728' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078620910644531

select fname,lname,mrdno from patient_registration where  patient_registration_id='2728' and  office_id= '1' 
 Execution Time:0.0037851333618164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010051727294922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010051727294922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080790519714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080790519714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080790519714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080790519714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080790519714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053648948669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053648948669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053648948669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053648948669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053648948669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073578357696533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073578357696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073578357696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073578357696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010769367218018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023088455200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073578357696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010769367218018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079290866851807

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023491382598877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023491382598877

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039870738983154

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020561218261719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030291080474854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030291080474854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058979988098145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.012234926223755

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.012234926223755

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030441284179688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041069984436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041069984436035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006718635559082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040459632873535

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026590824127197

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033361911773682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046420097351074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040221214294434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043361186981201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074150562286377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040719509124756

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040719509124756

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003870964050293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035860538482666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059380531311035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014598369598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003291130065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046641826629639

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010690689086914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010690689086914

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038681030273438

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027921199798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027921199798584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027921199798584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027921199798584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031569004058838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039169788360596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063769817352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027921199798584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031569004058838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056428909301758

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040960311889648

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040960311889648

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084114074707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024387836456299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055811405181885

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046999454498291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016410350799561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016410350799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016410350799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018260478973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016410350799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018260478973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017859935760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016410350799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018260478973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017859935760498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031650066375732

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031650066375732

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001007080078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050711631774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052919387817383

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073790550231934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073790550231934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085592269897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085592269897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085592269897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011310577392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085592269897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011310577392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069730281829834

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032999515533447

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032999515533447

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037829875946045

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039401054382324

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039401054382324

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042300224304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032680034637451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011568069458008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046708583831787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032680034637451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061359405517578

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052390098571777

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052390098571777

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.0065789222717285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077359676361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064702033996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030422210693359

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058102607727051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043048858642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043048858642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007037878036499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037920475006104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063960552215576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078392028808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078392028808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078392028808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078392028808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069010257720947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067071914672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018711090087891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011029243469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081729888916016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0054409503936768

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0054409503936768

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0051620006561279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027210712432861

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027210712432861

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038561820983887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036590099334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036590099334717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036590099334717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036590099334717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034511089324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036590099334717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034511089324951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086212158203125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086212158203125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086808204650879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086808204650879

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034530162811279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034530162811279

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038700103759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012960433959961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034570693969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012960433959961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052001476287842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013999938964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013999938964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037441253662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013999938964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037441253662109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010746002197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013999938964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037441253662109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010746002197266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057699680328369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027580261230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027580261230469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043498039245605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027580261230469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043498039245605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.005763053894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027580261230469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043498039245605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.005763053894043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.010349035263062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003197193145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003197193145752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003197193145752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029609203338623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003197193145752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029609203338623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045540332794189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003197193145752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029609203338623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045540332794189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097761154174805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027070045471191

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027070045471191

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017471313476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031571388244629

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031571388244629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031931400299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0061700344085693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0061700344085693

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041639804840088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0061700344085693

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041639804840088

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0061700344085693

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041639804840088

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041871070861816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0061700344085693

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041639804840088

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041871070861816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072968006134033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003270149230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003270149230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003270149230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003270149230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019910335540771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003270149230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019910335540771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054991245269775

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0015220642089844

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0015220642089844

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00088810920715332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052769184112549

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052769184112549

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036630630493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023760795593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078258514404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075111389160156

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034050941467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023760795593262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051729679107666

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020649433135986

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020649433135986

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033650398254395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032780170440674

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032780170440674

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038530826568604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038530826568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036511421203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038530826568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036511421203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039808750152588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038530826568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036511421203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039808750152588

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037088394165039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083041191101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038530826568604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036511421203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039808750152588

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037088394165039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094671249389648

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0066070556640625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0066070556640625

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021569728851318

select count(*) as cnt from patient_registration where  patient_registration_id= '2680' and  office_id= '1' 
 Execution Time:0.0019130706787109

select count(*) as cnt from patient_registration where  patient_registration_id= '2680' and  office_id= '1' 
 Execution Time:0.0019130706787109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2680' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052351951599121

select count(*) as cnt from patient_registration where  patient_registration_id= '2680' and  office_id= '1' 
 Execution Time:0.0019130706787109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2680' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052351951599121

select fname,lname,mrdno from patient_registration where  patient_registration_id='2680' and  office_id= '1' 
 Execution Time:0.0024449825286865

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0042798519134521

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0042798519134521

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0048549175262451

select count(*) as cnt from patient_registration where  patient_registration_id= '2679' and  office_id= '1' 
 Execution Time:0.003993034362793

select count(*) as cnt from patient_registration where  patient_registration_id= '2679' and  office_id= '1' 
 Execution Time:0.003993034362793

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2679' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058009624481201

select count(*) as cnt from patient_registration where  patient_registration_id= '2679' and  office_id= '1' 
 Execution Time:0.003993034362793

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2679' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058009624481201

select fname,lname,mrdno from patient_registration where  patient_registration_id='2679' and  office_id= '1' 
 Execution Time:0.0037610530853271

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0085840225219727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0085840225219727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025670528411865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012024164199829

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012024164199829

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012030124664307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012024164199829

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012030124664307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019130945205688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012024164199829

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012030124664307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019130945205688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012024164199829

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012030124664307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019130945205688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.018275022506714

select count(*) as cnt from patient_registration where  patient_registration_id= '2743' and  office_id= '1' 
 Execution Time:0.0036158561706543

select count(*) as cnt from patient_registration where  patient_registration_id= '2743' and  office_id= '1' 
 Execution Time:0.0036158561706543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2743' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080108642578125

select count(*) as cnt from patient_registration where  patient_registration_id= '2743' and  office_id= '1' 
 Execution Time:0.0036158561706543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2743' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080108642578125

select fname,lname,mrdno from patient_registration where  patient_registration_id='2743' and  office_id= '1' 
 Execution Time:0.0062639713287354

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034449100494385

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034449100494385

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033390522003174

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0048668384552002

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0048668384552002

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033891201019287

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0035679340362549

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.011506080627441

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00071811676025391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084779262542725

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00071811676025391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084779262542725

select fname,lname,mrdno from patient_registration where  patient_registration_id='1330' and  office_id= '1' 
 Execution Time:0.0016148090362549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007256031036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007256031036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007256031036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089669227600098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007256031036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089669227600098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00094079971313477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007256031036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089669227600098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00094079971313477

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0064868927001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045690536499023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015709400177002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049440860748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045690536499023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085489749908447

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003497838973999

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003497838973999

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034990310668945

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041530132293701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041530132293701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041530132293701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082130432128906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041530132293701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082130432128906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.013378143310547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041530132293701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082130432128906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.013378143310547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010810852050781

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0019230842590332

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0019230842590332

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0056278705596924

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032339096069336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032339096069336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000946044921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051288604736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037832260131836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037832260131836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030601024627686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037832260131836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037729740142822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076210498809814

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057816505432129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057816505432129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015139579772949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015139579772949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014920234680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092101097106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003460168838501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092101097106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003460168838501

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092101097106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003460168838501

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027439594268799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061948299407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010159969329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092101097106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003460168838501

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027439594268799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088310241699219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00337815284729

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00337815284729

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038480758666992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042691230773926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020639896392822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020639896392822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020639896392822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020639896392822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026469230651855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020380020141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020639896392822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032479763031006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026469230651855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035214424133301

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00478196144104

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00478196144104

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017790794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064020156860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064020156860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064020156860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064020156860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0079209804534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015550851821899

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096149444580078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049698352813721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064020156860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0079209804534912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076520442962646

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081205368041992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024831295013428

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024831295013428

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020341873168945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034289360046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034289360046387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013110637664795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033631324768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034289360046387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013110637664795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023190975189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062060356140137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047268867492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023190975189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005767822265625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094549655914307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094549655914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094549655914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079209804534912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094549655914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079209804534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039808750152588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094549655914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079209804534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039808750152588

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.017399072647095

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0045058727264404

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0045058727264404

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050640106201172

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0045058727264404

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050640106201172

select fname,lname,mrdno from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.0012421607971191

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.028451204299927

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.028451204299927

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037848949432373

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.003432035446167

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014672994613647

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014672994613647

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067670345306396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014672994613647

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067670345306396

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014672994613647

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067670345306396

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014672994613647

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067670345306396

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031490325927734

select count(*) as cnt from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0032122135162354

select count(*) as cnt from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0032122135162354

select * from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0061080455780029

select count(*) as cnt from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0032122135162354

select * from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0061080455780029

select * from billing_detail where  billing_master_id= '433' 
 Execution Time:0.0014770030975342

select count(*) as cnt from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0032122135162354

select * from billing_master where  billing_master_id= '433' and  office_id= '1' 
 Execution Time:0.0061080455780029

select * from billing_detail where  billing_master_id= '433' 
 Execution Time:0.0014770030975342

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0024590492248535

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.008012056350708

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.008012056350708

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0096819400787354

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0016541481018066

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0016541481018066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.004796028137207

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0016541481018066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.004796028137207

select fname,lname,mrdno from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.00079822540283203

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054500102996826

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054500102996826

select fname,lname,mrdno from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.0037569999694824

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013260841369629

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013260841369629

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.001600980758667

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007171630859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007171630859375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094795227050781

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045480728149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014638900756836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014638900756836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012929439544678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014638900756836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012929439544678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010009050369263

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038089752197266

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038089752197266

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028030872344971

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029380321502686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029380321502686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074388980865479

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021908283233643

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021908283233643

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00076198577880859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 80 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00063705444335938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 80 
 Execution Time:0.00070095062255859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00084304809570312

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.000946044921875

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00037789344787598

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.024478912353516

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 23 
 Execution Time:0.001945972442627

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.003248929977417

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.001115083694458

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.00097203254699707

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.0010538101196289

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.001168966293335

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00066614151000977

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056815147399902

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.0013089179992676

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.003371000289917

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00082921981811523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 23 
 Execution Time:0.00038814544677734

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.0019829273223877

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.00079703330993652

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.0040018558502197

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.0038590431213379

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.0036139488220215

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.0039889812469482

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00058817863464355

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.006598949432373

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.0046639442443848

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00068998336791992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00053310394287109

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 23 
 Execution Time:0.00048518180847168

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.00081992149353027

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.00075292587280273

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.00075197219848633

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.00064897537231445

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.0007929801940918

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00036311149597168


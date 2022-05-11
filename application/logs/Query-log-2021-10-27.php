select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067930221557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067930221557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077838897705078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067930221557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077838897705078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067930221557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077838897705078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010708093643188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088160037994385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077581405639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067930221557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077838897705078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010708093643188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050089359283447

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0011248588562012

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0011248588562012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025169849395752

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0011248588562012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025169849395752

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.0022070407867432

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00086879730224609

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00086879730224609

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031120777130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056309700012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031120777130127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005817174911499

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00057506561279297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.002410888671875

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00057506561279297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.002410888671875

select fname,lname,mrdno from patient_registration where  patient_registration_id='1542' and  office_id= '1' 
 Execution Time:0.0007469654083252

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084519386291504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084519386291504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0011160373687744

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0011160373687744

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084996223449707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084996223449707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064778327941895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091850757598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091850757598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091850757598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091850757598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025589466094971

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0033659934997559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0033659934997559

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.0039889812469482

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0032589435577393

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0032589435577393

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0028619766235352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080609321594238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080609321594238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023748874664307

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075697898864746

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075697898864746

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033261775970459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0137619972229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004321813583374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004321813583374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004321813583374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004321813583374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0012931823730469

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0012931823730469

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-22' and '2021-10-22' and  patient_registration.office_id= 1      
 Execution Time:0.0022978782653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01847505569458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01847505569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01847505569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01847505569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01847505569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021071434020996

select count(*) as cnt from patient_registration where  patient_registration_id= '1542' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021071434020996

select fname,lname,mrdno from patient_registration where  patient_registration_id='1542' and  office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002810001373291

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002810001373291

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013711452484131

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0042610168457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005363941192627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005363941192627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043411254882812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005363941192627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043411254882812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0095319747924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005363941192627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043411254882812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0095319747924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0088191032409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005363941192627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043411254882812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0095319747924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0088191032409668

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.012824058532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091385841369629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071520805358887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091385841369629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071520805358887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091385841369629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071520805358887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012149810791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091385841369629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071520805358887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012149810791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011293172836304

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022270679473877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022270679473877

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031299591064453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026888847351074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034971237182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034971237182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-25' and  '2021-10-25' and  billing_master.office_id= 1        
 Execution Time:0.0024569034576416

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-25' and  '2021-10-25' and  billing_master.office_id= 1        
 Execution Time:0.0024569034576416

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-25' and '2021-10-25' and  patient_registration.office_id= 1      
 Execution Time:0.0065798759460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036327838897705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036327838897705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036327838897705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019562244415283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038909912109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036327838897705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039219856262207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054738521575928

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025699138641357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053999423980713

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00094795227050781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00094795227050781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0023419857025146

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018420219421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018420219421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063109397888184

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044393539428711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086712837219238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086712837219238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070714950561523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0054061412811279

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0054061412811279

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037200450897217

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021710395812988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021710395812988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033161640167236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033161640167236

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.015336036682129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012009143829346

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012009143829346

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090503692626953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090503692626953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074481964111328

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074481964111328

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034680366516113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018320083618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018320083618164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031430721282959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031430721282959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057210922241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031430721282959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057210922241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046248435974121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031430721282959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057210922241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046248435974121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028550624847412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031430721282959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057210922241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046248435974121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028550624847412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035779476165771

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035779476165771

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043439865112305

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039329528808594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039329528808594

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038120746612549

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000885009765625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037689208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037689208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017998218536377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037689208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017998218536377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037689208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017998218536377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037689208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017998218536377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037729740142822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047781467437744

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015029907226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015029907226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044071674346924

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019299983978271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016500949859619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016500949859619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001410961151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016500949859619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001410961151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025570392608643

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012838840484619

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012838840484619

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032491683959961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037360191345215

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037360191345215

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015342235565186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015342235565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015342235565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032539367675781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015342235565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032539367675781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015621185302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012779235839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019760131835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015342235565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032539367675781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015621185302734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080890655517578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044910907745361

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044910907745361

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0075459480285645

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00223708152771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00223708152771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00223708152771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00223708152771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025179386138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040850639343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00223708152771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025179386138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060019493103027

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00040483474731445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031840801239014

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00040483474731445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031840801239014

select fname,lname,mrdno from patient_registration where  patient_registration_id='1595' and  office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002598762512207

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00041985511779785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017719268798828

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.00041985511779785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017719268798828

select fname,lname,mrdno from patient_registration where  patient_registration_id='1768' and  office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033328533172607

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033328533172607

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039598941802979

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017595291137695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0017910003662109

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0017910003662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054900646209717

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0017910003662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054900646209717

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00096702575683594

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011801719665527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011801719665527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011801719665527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011801719665527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033669471740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011801719665527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033669471740723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052189826965332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075411796569824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075411796569824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010559558868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010559558868408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010559558868408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010559558868408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010559558868408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054078102111816

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099802017211914

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099802017211914

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00084304809570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098109245300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007939338684082

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055139064788818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039849281311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021791458129883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016923904418945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016923904418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016923904418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043583869934082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016923904418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043583869934082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0097229480743408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016923904418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.043583869934082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0097229480743408

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.024777889251709

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0042550563812256

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0042550563812256

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047461986541748

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0042550563812256

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047461986541748

select fname,lname,mrdno from patient_registration where  patient_registration_id='1768' and  office_id= '1' 
 Execution Time:0.003795862197876

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.03007698059082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.03007698059082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0096940994262695

select * from ipdcharge where  ipdcharge_id=13  and office_id= 1 and status=1 
 Execution Time:0.001068115234375

select * from ipdcharge where  ipdcharge_id=14  and office_id= 1 and status=1 
 Execution Time:0.0015840530395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0039398670196533

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0039398670196533

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034730434417725

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0039398670196533

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034730434417725

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033469200134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033469200134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031259059906006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033469200134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031259059906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078020095825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033469200134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031259059906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078020095825195

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051720142364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035641193389893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033469200134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031259059906006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078020095825195

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051720142364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064148902893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064148902893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064148902893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064148902893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0068240165710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064148902893066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0068240165710449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008469820022583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008469820022583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068769454956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008469820022583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068769454956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0054941177368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008469820022583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068769454956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0054941177368164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0057740211486816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034358501434326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034358501434326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034358501434326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0046849250793457

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0046849250793457

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0093250274658203

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0046849250793457

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0093250274658203

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0081260204315186

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0067489147186279

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0067489147186279

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0068440437316895

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.004094123840332

select * from ipdcharge where  ipdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.005277156829834

select * from ipdcharge where  ipdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.0059888362884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014971017837524

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014971017837524

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00726318359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014971017837524

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00726318359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079469680786133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014971017837524

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00726318359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079469680786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017669200897217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014971017837524

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00726318359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0079469680786133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017669200897217

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011025905609131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011025905609131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011025905609131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011025905609131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028691291809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013298988342285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.019264936447144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011025905609131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028691291809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081379413604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038070678710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038070678710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057730674743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038070678710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057730674743652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006389856338501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038070678710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057730674743652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006389856338501

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.018603801727295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038070678710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057730674743652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006389856338501

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.018603801727295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016939878463745

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012290477752686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012290477752686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012290477752686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012290477752686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038502216339111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097379684448242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012290477752686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041060447692871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038502216339111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032279491424561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032279491424561

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001147985458374

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059020519256592

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059020519256592

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0066189765930176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005767822265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005767822265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0087709426879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005767822265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0087709426879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097088813781738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005767822265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0087709426879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097088813781738

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0097160339355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069131851196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058779716491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017711877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005767822265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0087709426879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097088813781738

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0097160339355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011807918548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037860870361328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090200901031494

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0091958045959473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0091958045959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0091958045959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0087249279022217

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0087249279022217

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061371326446533

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0087249279022217

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061371326446533

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0077691078186035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.063630104064941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.063630104064941

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029900074005127

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002626895904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002626895904541

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025970935821533

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.0075521469116211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017765998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017765998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017765998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002432107925415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017765998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002432107925415

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017765998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002432107925415

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046961307525635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046961307525635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046961307525635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046961307525635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046961307525635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0063579082489014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050458908081055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050458908081055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050458908081055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050458908081055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050458908081055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.014827013015747

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.014827013015747

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.017085075378418

select count(*) as cnt from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.003953218460083

select count(*) as cnt from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.003953218460083

select * from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.0026261806488037

select count(*) as cnt from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.003953218460083

select * from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.0026261806488037

select * from billing_detail where  billing_master_id= '317' 
 Execution Time:0.0014629364013672

select count(*) as cnt from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.003953218460083

select * from billing_master where  billing_master_id= '317' and  office_id= '1' 
 Execution Time:0.0026261806488037

select * from billing_detail where  billing_master_id= '317' 
 Execution Time:0.0014629364013672

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.0040769577026367

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0060389041900635

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0060389041900635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.46659898757935

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0060389041900635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.46659898757935

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0040619373321533

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.0063760280609131

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.0063760280609131

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.015233993530273

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.0063760280609131

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.015233993530273

select fname,lname,mrdno from patient_registration where  patient_registration_id='1595' and  office_id= '1' 
 Execution Time:0.0037858486175537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011319875717163

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011319875717163

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011319875717163

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011319875717163

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011319875717163

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0073599815368652

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034210681915283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034210681915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034210681915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034210681915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037660598754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034210681915283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050029754638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037660598754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059340000152588

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015649795532227

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015649795532227

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027859210968018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027859210968018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023419857025146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037469863891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037469863891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037469863891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037469863891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037469863891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060081481933594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044660568237305

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003014087677002

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003014087677002

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089097023010254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060820579528809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060820579528809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040011405944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040011405944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040011405944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031251907348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040011405944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031251907348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018448829650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020751953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051231384277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040011405944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031251907348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018448829650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068268775939941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.012803077697754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.012803077697754

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039699077606201

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027999877929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027999877929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027999877929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001751184463501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027999877929688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082600116729736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030992031097412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099341869354248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030992031097412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00701904296875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021679401397705

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021679401397705

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0042119026184082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068931579589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068931579589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024750232696533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024750232696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024750232696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024750232696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017449855804443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016443967819214

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024750232696533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017449855804443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056490898132324

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0060031414031982

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0060031414031982

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0043389797210693

select count(*) as cnt from patient_registration where  patient_registration_id= '1706' and  office_id= '1' 
 Execution Time:0.004180908203125

select count(*) as cnt from patient_registration where  patient_registration_id= '1706' and  office_id= '1' 
 Execution Time:0.004180908203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1706' and  doctors_registration.office_id= '1' 
 Execution Time:0.0074429512023926

select count(*) as cnt from patient_registration where  patient_registration_id= '1706' and  office_id= '1' 
 Execution Time:0.004180908203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1706' and  doctors_registration.office_id= '1' 
 Execution Time:0.0074429512023926

select fname,lname,mrdno from patient_registration where  patient_registration_id='1706' and  office_id= '1' 
 Execution Time:0.0039248466491699

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.023167133331299

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.023167133331299

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0076179504394531

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0046350955963135

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0046350955963135

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020229816436768

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045859813690186

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045859813690186

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013811588287354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025491714477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025491714477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050117969512939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025491714477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050117969512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025491714477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050117969512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037760734558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025491714477539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050117969512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037760734558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011500120162964

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034439563751221

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034439563751221

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0073859691619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050108432769775

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050108432769775

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0054171085357666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0054171085357666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031499862670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0054171085357666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031499862670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077669620513916


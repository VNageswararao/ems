select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068080425262451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068080425262451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068080425262451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068080425262451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.014039993286133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013753890991211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097839832305908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068080425262451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.014039993286133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081131458282471

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.0042102336883545

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.0042102336883545

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069959163665771

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.0042102336883545

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069959163665771

select fname,lname,mrdno from patient_registration where  patient_registration_id='1105' and  office_id= '1' 
 Execution Time:0.0028641223907471

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037999153137207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037999153137207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031890869140625

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00091314315795898

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00091314315795898

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010421276092529

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010421276092529

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044319629669189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035841464996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040218830108643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030369758605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044319629669189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0065820217132568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0065820217132568

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-06' and  '2021-10-06' and  billing_master.office_id= 1        
 Execution Time:0.0039148330688477

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-06' and  '2021-10-06' and  billing_master.office_id= 1        
 Execution Time:0.0039148330688477

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-06' and '2021-10-06' and  patient_registration.office_id= 1      
 Execution Time:0.0033450126647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024149417877197

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043270587921143

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043270587921143

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029580593109131

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00080108642578125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00080108642578125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-06' and  '2021-10-06' and  billing_master.office_id= 1        
 Execution Time:0.0017168521881104

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-06' and  '2021-10-06' and  billing_master.office_id= 1        
 Execution Time:0.0017168521881104

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-06' and '2021-10-06' and  patient_registration.office_id= 1      
 Execution Time:0.0028359889984131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015218257904053

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065088272094727

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006101131439209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006101131439209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027389526367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027389526367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027389526367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027389526367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022189617156982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027389526367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022189617156982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037901401519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037901401519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037901401519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037901401519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037901401519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037510395050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037479400634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044000148773193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017931461334229

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018088817596436

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00065517425537109

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00065517425537109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024220943450928

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00065517425537109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024220943450928

select fname,lname,mrdno from patient_registration where  patient_registration_id='247' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046491622924805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046491622924805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046491622924805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046491622924805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098299980163574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098299980163574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064492225646973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064492225646973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028831958770752

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00047492980957031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022561550140381

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00047492980957031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022561550140381

select fname,lname,mrdno from patient_registration where  patient_registration_id='100' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.010147094726562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.010147094726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021770000457764

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.00056886672973633

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.00056886672973633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021648406982422

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.00056886672973633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021648406982422

select fname,lname,mrdno from patient_registration where  patient_registration_id='883' and  office_id= '1' 
 Execution Time:0.0010049343109131

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012891292572021

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012891292572021

select fname,lname,mrdno from patient_registration where  patient_registration_id='874' and  office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058102607727051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081896781921387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081896781921387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053882598876953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053882598876953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select count(*) as cnt from patient_registration where  patient_registration_id= '1047' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '1047' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1047' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020420551300049

select count(*) as cnt from patient_registration where  patient_registration_id= '1047' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1047' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020420551300049

select fname,lname,mrdno from patient_registration where  patient_registration_id='1047' and  office_id= '1' 
 Execution Time:0.00080490112304688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012950897216797

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012950897216797

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032079219818115

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025877952575684

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025877952575684

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037438869476318

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045514106750488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016050338745117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016050338745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016050338745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016050338745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021178722381592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016050338745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021178722381592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098299980163574

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026679039001465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026061534881592

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.001215934753418

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.001215934753418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021460056304932

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.001215934753418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021460056304932

select fname,lname,mrdno from patient_registration where  patient_registration_id='881' and  office_id= '1' 
 Execution Time:0.0041708946228027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085783004760742

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085783004760742

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030038356781006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030038356781006

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.089039087295532

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030038356781006

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.089039087295532

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0072181224822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030038356781006

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.089039087295532

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0072181224822998

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0095398426055908

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.0034220218658447

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.0034220218658447

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028328895568848

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.0034220218658447

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028328895568848

select fname,lname,mrdno from patient_registration where  patient_registration_id='881' and  office_id= '1' 
 Execution Time:0.0025479793548584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.064870834350586

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.064870834350586

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0047399997711182

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0032601356506348

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0038018226623535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039279460906982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039279460906982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039279460906982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039279460906982

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026180744171143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014348030090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014348030090332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024018287658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014348030090332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024018287658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014348030090332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024018287658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027780532836914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014348030090332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024018287658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027780532836914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082519054412842

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038609504699707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038609504699707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040109157562256

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028395652770996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00051307678222656

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055980682373047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055980682373047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043892860412598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029430389404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029430389404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029430389404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029430389404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029430389404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057506561279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024631023406982

select count(*) as cnt from patient_registration where  patient_registration_id= '982' and  office_id= '1' 
 Execution Time:0.0040178298950195

select count(*) as cnt from patient_registration where  patient_registration_id= '982' and  office_id= '1' 
 Execution Time:0.0040178298950195

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067441463470459

select count(*) as cnt from patient_registration where  patient_registration_id= '982' and  office_id= '1' 
 Execution Time:0.0040178298950195

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='982' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067441463470459

select fname,lname,mrdno from patient_registration where  patient_registration_id='982' and  office_id= '1' 
 Execution Time:0.0026061534881592

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006411075592041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006411075592041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00057101249694824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.001399040222168

select count(*) as cnt from patient_registration where  patient_registration_id= '567' and  office_id= '1' 
 Execution Time:0.00057101249694824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='567' and  doctors_registration.office_id= '1' 
 Execution Time:0.001399040222168

select fname,lname,mrdno from patient_registration where  patient_registration_id='567' and  office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '739' and  office_id= '1' 
 Execution Time:0.0076329708099365

select count(*) as cnt from patient_registration where  patient_registration_id= '739' and  office_id= '1' 
 Execution Time:0.0076329708099365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='739' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023481845855713

select count(*) as cnt from patient_registration where  patient_registration_id= '739' and  office_id= '1' 
 Execution Time:0.0076329708099365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='739' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023481845855713

select fname,lname,mrdno from patient_registration where  patient_registration_id='739' and  office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039041042327881

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039041042327881

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013279914855957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027999877929688

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0045621395111084

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0045621395111084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033271312713623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067782402038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067782402038574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067782402038574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067782402038574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067782402038574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023131370544434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023131370544434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023131370544434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057950019836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023131370544434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057950019836426

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0087840557098389

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00071406364440918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1237' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016970634460449

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00071406364440918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1237' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016970634460449

select fname,lname,mrdno from patient_registration where  patient_registration_id='1237' and  office_id= '1' 
 Execution Time:0.0053730010986328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099492073059082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099492073059082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029470920562744

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.010461807250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056271553039551

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056271553039551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056271553039551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016601085662842

select count(*) as cnt from patient_registration where  patient_registration_id= '986' and  office_id= '1' 
 Execution Time:0.0035209655761719

select count(*) as cnt from patient_registration where  patient_registration_id= '986' and  office_id= '1' 
 Execution Time:0.0035209655761719

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='986' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029428005218506

select count(*) as cnt from patient_registration where  patient_registration_id= '986' and  office_id= '1' 
 Execution Time:0.0035209655761719

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='986' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029428005218506

select fname,lname,mrdno from patient_registration where  patient_registration_id='986' and  office_id= '1' 
 Execution Time:0.0029029846191406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '569' and  office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_registration where  patient_registration_id= '569' and  office_id= '1' 
 Execution Time:0.00090193748474121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='569' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023360252380371

select count(*) as cnt from patient_registration where  patient_registration_id= '569' and  office_id= '1' 
 Execution Time:0.00090193748474121

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='569' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023360252380371

select fname,lname,mrdno from patient_registration where  patient_registration_id='569' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019230842590332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019230842590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037500858306885

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00039386749267578

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034670829772949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034670829772949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048391819000244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096478462219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096478462219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096478462219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096478462219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041489601135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0136559009552

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0091378688812256

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015661716461182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096478462219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041489601135254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069308280944824

select count(*) as cnt from patient_registration where  patient_registration_id= '1175' and  office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_registration where  patient_registration_id= '1175' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1175' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022602081298828

select count(*) as cnt from patient_registration where  patient_registration_id= '1175' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1175' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022602081298828

select fname,lname,mrdno from patient_registration where  patient_registration_id='1175' and  office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049989223480225

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049989223480225

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012331008911133

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013091564178467

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013091564178467

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022819042205811

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064182281494141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064182281494141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002532958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036871433258057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036871433258057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036871433258057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036871433258057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0081207752227783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013291120529175

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036871433258057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0081207752227783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093488693237305

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.0014450550079346

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.0014450550079346

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='142' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031070709228516

select count(*) as cnt from patient_registration where  patient_registration_id= '142' and  office_id= '1' 
 Execution Time:0.0014450550079346

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='142' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031070709228516

select fname,lname,mrdno from patient_registration where  patient_registration_id='142' and  office_id= '1' 
 Execution Time:0.0039429664611816

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020880699157715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020880699157715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061416625976562

select count(*) as cnt from patient_registration where  patient_registration_id= '463' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '463' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022289752960205

select count(*) as cnt from patient_registration where  patient_registration_id= '463' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022289752960205

select fname,lname,mrdno from patient_registration where  patient_registration_id='463' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017740726470947

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017740726470947

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029749870300293

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016050338745117

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016050338745117

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012280941009521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '1240' and  office_id= '1' 
 Execution Time:0.0038340091705322

select count(*) as cnt from patient_registration where  patient_registration_id= '1240' and  office_id= '1' 
 Execution Time:0.0038340091705322

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027651786804199

select count(*) as cnt from patient_registration where  patient_registration_id= '1240' and  office_id= '1' 
 Execution Time:0.0038340091705322

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027651786804199

select fname,lname,mrdno from patient_registration where  patient_registration_id='1240' and  office_id= '1' 
 Execution Time:0.0030219554901123

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003911018371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003911018371582

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0079119205474854

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0039820671081543

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.005014181137085

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044641494750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044641494750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044641494750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052049160003662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044641494750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052049160003662

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044641494750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052049160003662

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089597702026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089597702026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028500556945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089597702026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028500556945801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017318725585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089597702026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028500556945801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017318725585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004504919052124

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00056195259094238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024058818817139

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00056195259094238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024058818817139

select fname,lname,mrdno from patient_registration where  patient_registration_id='1204' and  office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0063259601593018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0063259601593018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046770572662354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096893310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096893310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016050338745117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096893310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016050338745117

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018100738525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096893310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016050338745117

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018100738525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select count(*) as cnt from patient_registration where  patient_registration_id= '1054' and  office_id= '1' 
 Execution Time:0.0033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '1054' and  office_id= '1' 
 Execution Time:0.0033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1054' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038280487060547

select count(*) as cnt from patient_registration where  patient_registration_id= '1054' and  office_id= '1' 
 Execution Time:0.0033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1054' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038280487060547

select fname,lname,mrdno from patient_registration where  patient_registration_id='1054' and  office_id= '1' 
 Execution Time:0.0045390129089355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043830871582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043830871582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002446174621582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002446174621582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055029392242432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047671794891357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047671794891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004256010055542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047671794891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004256010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047671794891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004256010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035638809204102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014139890670776

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047671794891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004256010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035638809204102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044219493865967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026168823242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026168823242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026168823242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036158561706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026168823242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036158561706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066568851470947

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035550594329834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035550594329834

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038321018218994

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007321834564209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007321834564209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028588771820068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028588771820068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028588771820068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036540031433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028588771820068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036540031433105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019090175628662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049669742584229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028588771820068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036540031433105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019090175628662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052230358123779

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025148391723633

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025148391723633

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from patient_registration where  patient_registration_id= '248' and  office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from patient_registration where  patient_registration_id= '248' and  office_id= '1' 
 Execution Time:0.00072002410888672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='248' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021679401397705

select count(*) as cnt from patient_registration where  patient_registration_id= '248' and  office_id= '1' 
 Execution Time:0.00072002410888672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='248' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021679401397705

select fname,lname,mrdno from patient_registration where  patient_registration_id='248' and  office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0003511905670166

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0003511905670166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018501281738281

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0003511905670166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018501281738281

select fname,lname,mrdno from patient_registration where  patient_registration_id='247' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061297416687012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004420280456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035021305084229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035021305084229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035021305084229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035021305084229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027711391448975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035021305084229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029428005218506

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004880428314209

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0077338218688965

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0077338218688965

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038518905639648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011558532714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011558532714844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015270709991455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049519538879395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028328895568848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012271404266357

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012271404266357

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024051666259766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025320053100586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017077922821045

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065398216247559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099015235900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099015235900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021238327026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099015235900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021238327026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099015235900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021238327026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099015235900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021238327026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050711631774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00177001953125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014519691467285

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014519691467285

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012919902801514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002439022064209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026400089263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.012964010238647

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.012964010238647

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.007559061050415

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085592269897461

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085592269897461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013198852539062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013198852539062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013198852539062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013198852539062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013198852539062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025789737701416

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004417896270752

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004417896270752

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020790100097656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041370391845703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041370391845703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037589073181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035269260406494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041370391845703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037589073181152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058078765869141

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058078765869141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002540111541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002540111541748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002540111541748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062170028686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002540111541748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062170028686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002540111541748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062170028686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029621124267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '1251' and  office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_registration where  patient_registration_id= '1251' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1251' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023438930511475

select count(*) as cnt from patient_registration where  patient_registration_id= '1251' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1251' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023438930511475

select fname,lname,mrdno from patient_registration where  patient_registration_id='1251' and  office_id= '1' 
 Execution Time:0.00088715553283691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027680397033691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027680397033691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035760402679443

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021162033081055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021162033081055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021162033081055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021162033081055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028030872344971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027859210968018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027859210968018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027859210968018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027859210968018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027859210968018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037682056427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037682056427002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061511993408203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061511993408203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031881332397461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031881332397461

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081181526184082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034430027008057

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034430027008057

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.014772891998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.014772891998291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033881664276123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.014772891998291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020980834960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040369033813477

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026750564575195

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026750564575195

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020980834960938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035190582275391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023338794708252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042941570281982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042941570281982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042941570281982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042941570281982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041861534118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047900676727295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042941570281982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041861534118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044538974761963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014338493347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014338493347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014338493347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030581951141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014338493347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00050187110900879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1237' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021059513092041

select count(*) as cnt from patient_registration where  patient_registration_id= '1237' and  office_id= '1' 
 Execution Time:0.00050187110900879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1237' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021059513092041

select fname,lname,mrdno from patient_registration where  patient_registration_id='1237' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032529830932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032529830932617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039651393890381

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0054888725280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044848918914795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044848918914795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044848918914795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044848918914795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044848918914795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067400932312012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029110908508301

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027961730957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027961730957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027961730957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.019999980926514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027961730957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.019999980926514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012691020965576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.018310070037842

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048251152038574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027961730957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.019999980926514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012691020965576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012810230255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012810230255127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012810230255127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012810230255127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012810230255127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038180351257324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042488574981689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026068687438965

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013890266418457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013890266418457

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043821334838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072193145751953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072193145751953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072193145751953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017580986022949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072193145751953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017580986022949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00060915946960449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019960403442383

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00060915946960449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019960403442383

select fname,lname,mrdno from patient_registration where  patient_registration_id='722' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0092198848724365

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0092198848724365

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026412010192871

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026412010192871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026412010192871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026412010192871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026412010192871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067615509033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067615509033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067615509033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021131038665771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067615509033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021131038665771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045108795166016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097489356994629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097489356994629

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019299983978271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041978359222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019299983978271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051660537719727

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066399574279785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028591156005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030691623687744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030691623687744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030691623687744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select count(*) as cnt from patient_registration where  patient_registration_id= '1156' and  office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '1156' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1156' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021398067474365

select count(*) as cnt from patient_registration where  patient_registration_id= '1156' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1156' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021398067474365

select fname,lname,mrdno from patient_registration where  patient_registration_id='1156' and  office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from patient_registration where  patient_registration_id= '1257' and  office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from patient_registration where  patient_registration_id= '1257' and  office_id= '1' 
 Execution Time:0.00052285194396973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1257' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022439956665039

select count(*) as cnt from patient_registration where  patient_registration_id= '1257' and  office_id= '1' 
 Execution Time:0.00052285194396973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1257' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022439956665039

select fname,lname,mrdno from patient_registration where  patient_registration_id='1257' and  office_id= '1' 
 Execution Time:0.0026111602783203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013899803161621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013899803161621

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00072717666625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00051712989807129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1258' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014350414276123

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00051712989807129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1258' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014350414276123

select fname,lname,mrdno from patient_registration where  patient_registration_id='1258' and  office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031018257141113

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0033471584320068

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028831958770752

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.001366138458252

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.001366138458252

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049996376037598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007939338684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007939338684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007939338684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007939338684082

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061583518981934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.003943920135498

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.003943920135498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038909912109375

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.003943920135498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038909912109375

select fname,lname,mrdno from patient_registration where  patient_registration_id='515' and  office_id= '1' 
 Execution Time:0.0050690174102783

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013370513916016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013370513916016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031311511993408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015931129455566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015931129455566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015931129455566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015931129455566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008702278137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036258697509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015931129455566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008702278137207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0038919448852539

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0038919448852539

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0037100315093994

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081491470336914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081491470336914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select count(*) as cnt from patient_registration where  patient_registration_id= '1076' and  office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_registration where  patient_registration_id= '1076' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1076' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021021366119385

select count(*) as cnt from patient_registration where  patient_registration_id= '1076' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1076' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021021366119385

select fname,lname,mrdno from patient_registration where  patient_registration_id='1076' and  office_id= '1' 
 Execution Time:0.001194953918457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034608840942383

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034608840942383

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031318664550781

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028810501098633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028810501098633

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033919811248779

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019471645355225

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029361248016357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029361248016357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029361248016357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028657913208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024418830871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024418830871582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024418830871582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024418830871582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084090232849121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0087680816650391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0087680816650391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0084860324859619

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013208389282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013208389282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013208389282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013208389282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015721321105957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0053360462188721

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073003768920898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014710426330566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026140213012695

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038158893585205

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038158893585205

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011274099349976

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013899803161621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006784200668335

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00034880638122559

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054991245269775

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054991245269775

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068950653076172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051522254943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051522254943848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031638145446777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.0017850399017334

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.0017850399017334

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027790069580078

select count(*) as cnt from patient_registration where  patient_registration_id= '883' and  office_id= '1' 
 Execution Time:0.0017850399017334

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027790069580078

select fname,lname,mrdno from patient_registration where  patient_registration_id='883' and  office_id= '1' 
 Execution Time:0.0011658668518066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011545896530151

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011545896530151

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051617622375488

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.005626916885376

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.00166916847229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084996223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084996223449707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084996223449707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084996223449707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015649795532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084996223449707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015649795532227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011600017547607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.002129077911377

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.002129077911377

select fname,lname,mrdno from patient_registration where  patient_registration_id='1105' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014710426330566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044610500335693

select count(*) as cnt from patient_registration where  patient_registration_id= '874' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044610500335693

select fname,lname,mrdno from patient_registration where  patient_registration_id='874' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058920383453369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058920383453369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067219734191895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058920383453369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067219734191895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058920383453369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067219734191895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037310123443604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058920383453369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067219734191895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037310123443604

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024380683898926

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039982795715332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097670555114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097670555114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097670555114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097670555114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0052850246429443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094821453094482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097670555114746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0052850246429443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056521892547607

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020885467529297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092220306396484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092220306396484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041289329528809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063085556030273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063085556030273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002708911895752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027101039886475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027101039886475

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037999153137207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001291036605835

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001291036605835

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026559829711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026559829711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035040378570557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026559829711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035040378570557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026559829711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035040378570557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003911018371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026559829711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035040378570557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055348873138428

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018038749694824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018038749694824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073361396789551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073361396789551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0054779052734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073361396789551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0054779052734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037038326263428

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007011890411377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007011890411377

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003525972366333

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003525972366333

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051109790802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028848648071289

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028848648071289

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014379024505615

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013229846954346

select count(*) as cnt from patient_registration where  patient_registration_id= '515' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='515' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013229846954346

select fname,lname,mrdno from patient_registration where  patient_registration_id='515' and  office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081205368041992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081205368041992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036470890045166

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0038328170776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029921531677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048670768737793

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048670768737793

select fname,lname,mrdno from patient_registration where  patient_registration_id='722' and  office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049614906311035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049614906311035

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010290145874023

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041360855102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041360855102539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041360855102539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041360855102539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041360855102539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031821727752686

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031821727752686

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037369728088379

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010683059692383

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010683059692383

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014030933380127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066184997558594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066184997558594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046548843383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032060146331787

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032060146331787

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036699771881104

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056469440460205

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056469440460205

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078108310699463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037720203399658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063319206237793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025248527526855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025248527526855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048871040344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025248527526855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048871040344238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030040740966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030040740966797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003899097442627

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.0051319599151611

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.0051319599151611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.0051319599151611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.003809928894043

select fname,lname,mrdno from patient_registration where  patient_registration_id='897' and  office_id= '1' 
 Execution Time:0.0037429332733154

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034840106964111

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034840106964111

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020899772644043

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075197219848633

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037920475006104

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037920475006104

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024840831756592

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035290718078613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035290718078613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038299560546875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050601959228516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050601959228516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020520687103271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025498867034912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025498867034912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052978992462158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025498867034912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052978992462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025498867034912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052978992462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017662048339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017635822296143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025498867034912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052978992462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017662048339844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008228063583374

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00072407722473145

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00072407722473145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020921230316162

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00072407722473145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020921230316162

select fname,lname,mrdno from patient_registration where  patient_registration_id='897' and  office_id= '1' 
 Execution Time:0.0033018589019775

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039410591125488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015020370483398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028140544891357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028140544891357

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038771629333496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069890022277832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028331279754639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028140544891357

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038771629333496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061380863189697

select count(*) as cnt from patient_registration where  patient_registration_id= '895' and  office_id= '1' 
 Execution Time:0.003075122833252

select count(*) as cnt from patient_registration where  patient_registration_id= '895' and  office_id= '1' 
 Execution Time:0.003075122833252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='895' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031120777130127

select count(*) as cnt from patient_registration where  patient_registration_id= '895' and  office_id= '1' 
 Execution Time:0.003075122833252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='895' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031120777130127

select fname,lname,mrdno from patient_registration where  patient_registration_id='895' and  office_id= '1' 
 Execution Time:0.0048608779907227

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031158924102783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031158924102783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047609806060791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031158924102783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047609806060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031158924102783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047609806060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044980049133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031158924102783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047609806060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044980049133301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050990581512451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032289028167725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032289028167725

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032289028167725

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087790489196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032289028167725

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087790489196777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026528835296631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032289028167725

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087790489196777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026528835296631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010788440704346

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010788440704346

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0060100555419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003547191619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003547191619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003547191619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003547191619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00060081481933594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297


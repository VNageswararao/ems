select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074200630187988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074200630187988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074200630187988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074200630187988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-22' and  '2021-11-22' and  billing_master.office_id= 1        
 Execution Time:0.0025458335876465

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-22' and  '2021-11-22' and  billing_master.office_id= 1        
 Execution Time:0.0025458335876465

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-22' and '2021-11-22' and  patient_registration.office_id= 1      
 Execution Time:0.017812013626099

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029251575469971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01102614402771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029251575469971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021078586578369

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021078586578369

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023794174194336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037040710449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048019886016846

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035500526428223

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010509490966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010509490966797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057108402252197

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00034904479980469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='562' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036771297454834

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00034904479980469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='562' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036771297454834

select fname,lname,mrdno from patient_registration where  patient_registration_id='562' and  office_id= '1' 
 Execution Time:0.00028681755065918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010089874267578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010089874267578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070881843566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048208236694336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070881843566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079202651977539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031251907348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select count(*) as cnt from patient_registration where  patient_registration_id= '2758' and  office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from patient_registration where  patient_registration_id= '2758' and  office_id= '1' 
 Execution Time:0.00078201293945312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2758' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065929889678955

select count(*) as cnt from patient_registration where  patient_registration_id= '2758' and  office_id= '1' 
 Execution Time:0.00078201293945312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2758' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065929889678955

select fname,lname,mrdno from patient_registration where  patient_registration_id='2758' and  office_id= '1' 
 Execution Time:0.0016000270843506

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.059086084365845

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.059086084365845

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0043950080871582

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00094795227050781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070760250091553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063679218292236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063679218292236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063679218292236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063679218292236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063679218292236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066459178924561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066459178924561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066459178924561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066459178924561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034110546112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063140392303467

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066459178924561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034110546112061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014497041702271

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041294097900391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008091926574707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008091926574707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029299259185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029299259185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029299259185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029299259185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032188892364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027220249176025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029299259185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039379596710205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032188892364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063619613647461

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0037069320678711

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0037069320678711

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010111331939697

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002357006072998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002357006072998

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026750564575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025370121002197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025370121002197

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020971298217773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025370121002197

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020971298217773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025370121002197

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020971298217773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022649765014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025370121002197

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020971298217773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022649765014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070860385894775

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050070285797119

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050070285797119

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.00098609924316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043680667877197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.0033369064331055

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.0033369064331055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047998428344727

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.0033369064331055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047998428344727

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.003774881362915

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0063369274139404

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051593780517578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051593780517578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051593780517578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051593780517578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058221817016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011771202087402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011771202087402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082221031188965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011771202087402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082221031188965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014416933059692

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011771202087402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082221031188965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014416933059692

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011771202087402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082221031188965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014416933059692

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '2756' and  office_id= '1' 
 Execution Time:0.00050520896911621

select count(*) as cnt from patient_registration where  patient_registration_id= '2756' and  office_id= '1' 
 Execution Time:0.00050520896911621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052599906921387

select count(*) as cnt from patient_registration where  patient_registration_id= '2756' and  office_id= '1' 
 Execution Time:0.00050520896911621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052599906921387

select fname,lname,mrdno from patient_registration where  patient_registration_id='2756' and  office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057816505432129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057816505432129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0039868354797363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073695182800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073695182800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073695182800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013959407806396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032029151916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073695182800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013959407806396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016400098800659

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036571025848389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036571025848389

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003154993057251

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023469924926758

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023469924926758

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028641223907471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068950653076172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068950653076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079009532928467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068950653076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079009532928467

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068950653076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079009532928467

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0025861263275146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068950653076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079009532928467

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0025861263275146

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046529769897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046529769897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046529769897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046529769897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019450187683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046529769897461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019450187683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050649642944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025041103363037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025041103363037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025041103363037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014989376068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025041103363037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020589828491211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014989376068115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091249942779541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022990703582764

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022990703582764

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079894065856934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079894065856934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010280609130859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014560222625732

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014560222625732

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011710166931152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078980922698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065090656280518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052320957183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052320957183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010067939758301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052320957183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010067939758301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067250728607178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052320957183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010067939758301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067250728607178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.014787912368774

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052320957183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010067939758301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067250728607178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.014787912368774

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.0046699047088623

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.0046699047088623

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072040557861328

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.0046699047088623

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072040557861328

select fname,lname,mrdno from patient_registration where  patient_registration_id='2762' and  office_id= '1' 
 Execution Time:0.0023701190948486

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0056948661804199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0056948661804199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004019021987915

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022199153900146

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022199153900146

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019009113311768

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0013270378112793

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0034339427947998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052731037139893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052731037139893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052731037139893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052731037139893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052731037139893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052940845489502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052940845489502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052940845489502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052940845489502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052940845489502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019478797912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060999393463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023808479309082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023808479309082

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0045530796051025

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0029401779174805

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0029401779174805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044779777526855

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0029401779174805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044779777526855

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0013229846954346

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035030841827393

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035030841827393

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029439926147461

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047590732574463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052030086517334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047590732574463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065147876739502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026531219482422

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026531219482422

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004054069519043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037479400634766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037479400634766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0066242218017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019500255584717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019500255584717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019500255584717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019500255584717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064468383789062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055959224700928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019500255584717

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036849975585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088691711425781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020041465759277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020041465759277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069212913513184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0062320232391357

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0062320232391357

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042340755462646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042340755462646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042340755462646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042340755462646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031440258026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033111572265625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054380893707275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042340755462646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031440258026123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092058181762695

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0015790462493896

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0015790462493896

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0038127899169922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036280155181885

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036280155181885

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016160011291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021503925323486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016160011291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076649188995361

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035150051116943

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035150051116943

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00094079971313477

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025379657745361

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025379657745361

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059797763824463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059797763824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059797763824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059797763824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035128593444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052390098571777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059797763824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035128593444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089249610900879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058817863464355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058817863464355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085115432739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054919719696045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018951892852783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020561218261719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018951892852783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070250034332275

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036716461181641

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062119960784912

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089812278747559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089812278747559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027530193328857

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020890235900879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020890235900879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041317939758301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041317939758301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041317939758301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0049080848693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087759494781494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041317939758301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0049080848693848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097701549530029

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040938854217529

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040938854217529

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037181377410889

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050258636474609

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.011660099029541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.011660099029541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016558170318604

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018761157989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018761157989502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018761157989502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068359375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073981285095215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073981285095215

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073981285095215

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073981285095215

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00319504737854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022578239440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073981285095215

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039887428283691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036330223083496

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036330223083496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003911018371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011157989501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011157989501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011157989501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011157989501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033068656921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049920082092285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017311573028564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011157989501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033068656921387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074300765991211

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075316429138184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075316429138184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034511089324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034511089324951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034511089324951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034511089324951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019679069519043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034511089324951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019679069519043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046069622039795

select count(*) as cnt from patient_registration where  patient_registration_id= '2472' and  office_id= '1' 
 Execution Time:0.0051171779632568

select count(*) as cnt from patient_registration where  patient_registration_id= '2472' and  office_id= '1' 
 Execution Time:0.0051171779632568

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2472' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056488513946533

select count(*) as cnt from patient_registration where  patient_registration_id= '2472' and  office_id= '1' 
 Execution Time:0.0051171779632568

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2472' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056488513946533

select fname,lname,mrdno from patient_registration where  patient_registration_id='2472' and  office_id= '1' 
 Execution Time:0.0019810199737549

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021109580993652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021109580993652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_registration where  patient_registration_id= '2763' and  office_id= '1' 
 Execution Time:0.0040929317474365

select count(*) as cnt from patient_registration where  patient_registration_id= '2763' and  office_id= '1' 
 Execution Time:0.0040929317474365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2763' and  doctors_registration.office_id= '1' 
 Execution Time:0.004188060760498

select count(*) as cnt from patient_registration where  patient_registration_id= '2763' and  office_id= '1' 
 Execution Time:0.0040929317474365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2763' and  doctors_registration.office_id= '1' 
 Execution Time:0.004188060760498

select fname,lname,mrdno from patient_registration where  patient_registration_id='2763' and  office_id= '1' 
 Execution Time:0.0038330554962158

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039458274841309

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039458274841309

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012011528015137

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074179172515869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074179172515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074179172515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074179172515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074179172515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0071249008178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040318965911865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040318965911865

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036230087280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040318965911865

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037550926208496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053999423980713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027320384979248

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027320384979248

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.000244140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030488967895508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030488967895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030488967895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015010833740234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015010833740234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015010833740234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00040912628173828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041601657867432

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00040912628173828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041601657867432

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.0033769607543945

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0030679702758789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038719177246094

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017960071563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017960071563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017960071563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017619132995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029308795928955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017337799072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017960071563721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017619132995605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068809986114502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044481754302979

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044481754302979

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014290809631348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004967212677002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004967212677002

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021319389343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028040409088135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028040409088135

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028040409088135

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028040409088135

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060889720916748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004716157913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028040409088135

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037949085235596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079810619354248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.044925928115845

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.044925928115845

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.046106100082397

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.044925928115845

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.046106100082397

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.044925928115845

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.046106100082397

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.027734041213989

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.052879095077515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.038985967636108

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.050288200378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.044925928115845

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.046106100082397

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.027734041213989

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028140544891357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028140544891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028140544891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028140544891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013558864593506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060620307922363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028140544891357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013558864593506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017440319061279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017440319061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068469047546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017440319061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068469047546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024378299713135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017440319061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068469047546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024378299713135

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002173900604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022151470184326

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017440319061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068469047546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024378299713135

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002173900604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039505958557129

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025582313537598

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0004580020904541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032820701599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032820701599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022249221801758

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032820701599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022249221801758

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046169757843018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046169757843018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046169757843018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.0042870044708252

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.0018749237060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053768157958984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053768157958984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053768157958984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053768157958984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053768157958984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011191368103027

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030689239501953

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030689239501953

select fname,lname,mrdno from patient_registration where  patient_registration_id='2773' and  office_id= '1' 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.0036420822143555

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.0031559467315674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.0037579536437988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.074656963348389

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.095702886581421

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017914056777954

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017914056777954

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015521049499512

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.078077077865601

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028891563415527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028891563415527

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.00039005279541016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.0017819404602051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 81 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031113624572754

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.0010218620300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00032401084899902

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062928199768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062928199768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062928199768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062928199768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062928199768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.011494874954224

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.011494874954224

select fname,lname,mrdno from patient_registration where  patient_registration_id='2771' and  office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057721138000488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057721138000488

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026369094848633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026369094848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026369094848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0057659149169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049209594726562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049209594726562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049209594726562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049209594726562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077269077301025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077269077301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077269077301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026028156280518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077269077301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026028156280518

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025498867034912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077269077301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026028156280518

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025498867034912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038061141967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069868564605713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039548873901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038061141967773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068960189819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061299800872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0035340785980225

select count(*) as cnt from patient_registration where  patient_registration_id= '2766' and  office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_registration where  patient_registration_id= '2766' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2766' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041489601135254

select count(*) as cnt from patient_registration where  patient_registration_id= '2766' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2766' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041489601135254

select fname,lname,mrdno from patient_registration where  patient_registration_id='2766' and  office_id= '1' 
 Execution Time:0.00069499015808105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029740333557129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029740333557129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019590854644775

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056779384613037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056779384613037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056779384613037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056779384613037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0066690444946289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056779384613037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0066690444946289

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.023250102996826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010139942169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010139942169189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010139942169189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010139942169189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045359134674072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023689270019531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010139942169189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019340515136719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045359134674072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068819522857666

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043489933013916

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043489933013916

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029120445251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015718936920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048389434814453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048389434814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048389434814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048389434814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002540111541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030169486999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048389434814453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002540111541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009613037109375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078415870666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078415870666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078415870666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038821697235107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078415870666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038821697235107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032939910888672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032939910888672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00382399559021

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033979415893555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033979415893555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015280246734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031440258026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031440258026123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031440258026123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031440258026123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055949687957764

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031440258026123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077948570251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086278915405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086278915405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086278915405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086278915405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0062408447265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086278915405273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0062408447265625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.023362159729004

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049381256103516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049381256103516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021278858184814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013859987258911

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017910003662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010832071304321

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018529891967773

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018529891967773

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021775007247925

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021775007247925

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019040107727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037939548492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062031745910645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023789405822754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037939548492432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055689811706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077588558197021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077588558197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077588558197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077588558197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077588558197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0009310245513916

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0009310245513916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0073328018188477

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0009310245513916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0073328018188477

select fname,lname,mrdno from patient_registration where  patient_registration_id='2772' and  office_id= '1' 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022017955780029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022017955780029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022017955780029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022017955780029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036871433258057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022017955780029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087471008300781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087618827819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087618827819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087618827819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010278224945068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087618827819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010278224945068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087618827819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010278224945068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0067460536956787

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0067460536956787

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043418407440186

select count(*) as cnt from patient_registration where  patient_registration_id= '2772' and  office_id= '1' 
 Execution Time:0.0067460536956787

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043418407440186

select fname,lname,mrdno from patient_registration where  patient_registration_id='2772' and  office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0082581043243408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0082581043243408

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038299560546875

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0032668113708496

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0038559436798096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021271944046021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021271944046021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.009141206741333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021271944046021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.009141206741333

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023348331451416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021271944046021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.009141206741333

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023348331451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021271944046021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.009141206741333

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023348331451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031099319458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036180019378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036180019378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037992000579834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036180019378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037992000579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004770040512085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036180019378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037992000579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004770040512085

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012037754058838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036180019378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037992000579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004770040512085

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012037754058838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057051181793213

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010969161987305

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010969161987305

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0076580047607422

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015189647674561

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015189647674561

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025599002838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041120052337646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012885093688965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014440774917603

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041120052337646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087330341339111

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025670528411865

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025670528411865

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021440982818604

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013918876647949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013918876647949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016012191772461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016012191772461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039558410644531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016012191772461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039558410644531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016012191772461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039558410644531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042760372161865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004539966583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014111995697021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016012191772461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039558410644531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042760372161865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085461139678955

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034980773925781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034980773925781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039389133453369

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001223087310791

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001223087310791

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039079189300537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039079189300537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039079189300537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039079189300537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037081241607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023579597473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039079189300537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047528743743896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037081241607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084719657897949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061712265014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061712265014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061712265014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061712265014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061712265014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0057969093322754

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0057969093322754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068359375

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0057969093322754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068359375

select fname,lname,mrdno from patient_registration where  patient_registration_id='2776' and  office_id= '1' 
 Execution Time:0.0069930553436279

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093197822570801

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093197822570801

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046515464782715

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018420219421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026810169219971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026810169219971

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026810169219971

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026810169219971

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029411315917969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026810169219971

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089406967163086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004601001739502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004601001739502

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022270679473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073885917663574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022270679473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009321928024292

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011599063873291

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011599063873291

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024139881134033

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097417831420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097417831420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097417831420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097417831420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057790279388428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021889209747314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097417831420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057790279388428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012495994567871

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029971599578857

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029971599578857

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016019344329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081682205200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038008689880371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081682205200195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057389736175537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2784' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076150894165039

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2784' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076150894165039

select fname,lname,mrdno from patient_registration where  patient_registration_id='2784' and  office_id= '1' 
 Execution Time:0.0019299983978271

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034840106964111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034840106964111

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027840137481689

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0010199546813965

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0010199546813965

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2783' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066938400268555

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0010199546813965

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2783' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066938400268555

select fname,lname,mrdno from patient_registration where  patient_registration_id='2783' and  office_id= '1' 
 Execution Time:0.00066709518432617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060582160949707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060582160949707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005638599395752

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056118965148926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056118965148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056118965148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056118965148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056118965148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019621849060059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019621849060059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019621849060059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034298896789551

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010233163833618

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010233163833618

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036008358001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036008358001709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024511814117432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036008358001709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024511814117432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042870044708252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069081783294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049970149993896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036008358001709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024511814117432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042870044708252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060141086578369

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033669471740723

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033669471740723

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038349628448486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027961730957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027961730957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056979656219482

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024008750915527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036129951477051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077199935913086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077199935913086

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063490867614746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063490867614746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039417743682861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039417743682861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039417743682861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035111904144287

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010778903961182

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010778903961182

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021729469299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041220188140869

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041220188140869

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036740303039551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013008117675781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013008117675781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076520442962646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013008117675781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076520442962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012501955032349

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013008117675781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076520442962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012501955032349

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.027060031890869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01111888885498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018717050552368

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013008117675781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076520442962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012501955032349

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.027060031890869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013060092926025

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000579833984375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011060237884521

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015420913696289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010659694671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010659694671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010659694671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022728443145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010659694671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022728443145752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005709171295166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096988677978516

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096988677978516

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006601095199585

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006601095199585

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033318996429443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033318996429443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033318996429443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033318996429443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037539005279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052089691162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013273954391479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033318996429443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037539005279541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074291229248047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070259571075439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070259571075439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070259571075439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018961429595947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070259571075439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018961429595947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070259571075439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018961429595947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00038695335388184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042209625244141

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00038695335388184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042209625244141

select fname,lname,mrdno from patient_registration where  patient_registration_id='2787' and  office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060298442840576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060298442840576

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034968852996826

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0040900707244873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004601001739502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004601001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004601001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004601001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004601001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00051999092102051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045201778411865

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.00051999092102051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045201778411865

select fname,lname,mrdno from patient_registration where  patient_registration_id='2787' and  office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053215026855469

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063328742980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063328742980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063328742980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063328742980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063328742980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.0012528896331787

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.0012528896331787

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025038719177246

select count(*) as cnt from patient_registration where  patient_registration_id= '2787' and  office_id= '1' 
 Execution Time:0.0012528896331787

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2787' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025038719177246

select fname,lname,mrdno from patient_registration where  patient_registration_id='2787' and  office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028018951416016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028018951416016

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.003493070602417

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0019738674163818

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00095701217651367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037600994110107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026640892028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035991668701172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037600994110107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087499618530273

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046586990356445

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095605850219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095605850219727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093860626220703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095605850219727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093860626220703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095605850219727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093860626220703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089788436889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095605850219727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093860626220703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089788436889648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060172080993652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053031444549561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046830177307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046830177307129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038630962371826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044357776641846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004896879196167

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004896879196167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004896879196167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004896879196167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004896879196167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022001266479492

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022001266479492

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0041210651397705

select count(*) as cnt from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00039792060852051

select * from billing_detail where  billing_master_id= '435' 
 Execution Time:0.00074410438537598

select count(*) as cnt from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00039792060852051

select * from billing_detail where  billing_master_id= '435' 
 Execution Time:0.00074410438537598

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select count(*) as cnt from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_master where  billing_master_id= '435' and  office_id= '1' 
 Execution Time:0.00039792060852051

select * from billing_detail where  billing_master_id= '435' 
 Execution Time:0.00074410438537598

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00043988227844238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025720596313477

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00043988227844238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025720596313477

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049281120300293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049281120300293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049018859863281

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005544900894165

select count(*) as cnt from patient_registration where  patient_registration_id= '2566' and  office_id= '1' 
 Execution Time:0.0031769275665283

select count(*) as cnt from patient_registration where  patient_registration_id= '2566' and  office_id= '1' 
 Execution Time:0.0031769275665283

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2566' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040760040283203

select count(*) as cnt from patient_registration where  patient_registration_id= '2566' and  office_id= '1' 
 Execution Time:0.0031769275665283

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2566' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040760040283203

select fname,lname,mrdno from patient_registration where  patient_registration_id='2566' and  office_id= '1' 
 Execution Time:0.0037820339202881

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036671161651611

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036671161651611

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00083684921264648

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00083684921264648

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013790130615234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013790130615234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027701854705811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027701854705811

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027701854705811

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027701854705811

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011000633239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029618740081787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027701854705811

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011000633239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048439502716064

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044329166412354

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044329166412354

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014069080352783

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014069080352783

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010111331939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010111331939697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010111331939697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010111331939697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021829605102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010111331939697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049200057983398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016131401062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016131401062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016131401062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00047993659973145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2792' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048520565032959

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00047993659973145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2792' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048520565032959

select fname,lname,mrdno from patient_registration where  patient_registration_id='2792' and  office_id= '1' 
 Execution Time:0.0032539367675781

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016629695892334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016629695892334

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040810108184814

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058190822601318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058190822601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058190822601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026569366455078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058190822601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026569366455078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058190822601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026569366455078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025358200073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025238990783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025238990783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025238990783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088286399841309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020368099212646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025238990783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088286399841309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055849552154541


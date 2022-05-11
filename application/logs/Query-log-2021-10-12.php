select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024330615997314

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024330615997314

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024490356445312

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-11' and  '2021-10-11' and  billing_master.office_id= 1        
 Execution Time:0.0013408660888672

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-11' and  '2021-10-11' and  billing_master.office_id= 1        
 Execution Time:0.0013408660888672

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-11' and '2021-10-11' and  patient_registration.office_id= 1      
 Execution Time:0.0050840377807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01068902015686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025539398193359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021998882293701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01068902015686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040640830993652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019731521606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019731521606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019731521606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019731521606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038571357727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019731521606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038571357727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037190914154053

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014400482177734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014400482177734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014400482177734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014400482177734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027470588684082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select count(*) as cnt from patient_registration where  patient_registration_id= '1145' and  office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_registration where  patient_registration_id= '1145' and  office_id= '1' 
 Execution Time:0.00049114227294922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1145' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023808479309082

select count(*) as cnt from patient_registration where  patient_registration_id= '1145' and  office_id= '1' 
 Execution Time:0.00049114227294922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1145' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023808479309082

select fname,lname,mrdno from patient_registration where  patient_registration_id='1145' and  office_id= '1' 
 Execution Time:0.0012848377227783

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014960765838623

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077104568481445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067000389099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067000389099121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067000389099121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067000389099121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016531944274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067000389099121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016531944274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044960975646973

select count(*) as cnt from patient_registration where  patient_registration_id= '1371' and  office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from patient_registration where  patient_registration_id= '1371' and  office_id= '1' 
 Execution Time:0.00067496299743652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1371' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027821063995361

select count(*) as cnt from patient_registration where  patient_registration_id= '1371' and  office_id= '1' 
 Execution Time:0.00067496299743652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1371' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027821063995361

select fname,lname,mrdno from patient_registration where  patient_registration_id='1371' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063600540161133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063600540161133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063600540161133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030050277709961

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.00048017501831055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='789' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016191005706787

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.00048017501831055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='789' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016191005706787

select fname,lname,mrdno from patient_registration where  patient_registration_id='789' and  office_id= '1' 
 Execution Time:0.00020313262939453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033218860626221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033218860626221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048401355743408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033218860626221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048401355743408

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031638145446777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014767646789551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033218860626221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048401355743408

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031638145446777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005126953125

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00047588348388672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015628337860107

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00047588348388672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015628337860107

select fname,lname,mrdno from patient_registration where  patient_registration_id='56' and  office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032498836517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032498836517334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032498836517334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032498836517334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032498836517334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024991035461426

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00037693977355957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018179416656494

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00037693977355957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018179416656494

select fname,lname,mrdno from patient_registration where  patient_registration_id='56' and  office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027470588684082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027470588684082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071406364440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024459362030029

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017740726470947

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053620338439941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026988983154297

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025317668914795

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025317668914795

select fname,lname,mrdno from patient_registration where  patient_registration_id='408' and  office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075483322143555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075483322143555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026290416717529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038671493530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038671493530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038671493530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028941631317139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038671493530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028941631317139

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041811466217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038671493530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028941631317139

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041811466217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029101371765137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select count(*) as cnt from patient_registration where  patient_registration_id= '1405' and  office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_registration where  patient_registration_id= '1405' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1405' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013890266418457

select count(*) as cnt from patient_registration where  patient_registration_id= '1405' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1405' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013890266418457

select fname,lname,mrdno from patient_registration where  patient_registration_id='1405' and  office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0072939395904541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0072939395904541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075888633728027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025899410247803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066900253295898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067281723022461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019111633300781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019111633300781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019111633300781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019111633300781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014297962188721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060219764709473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046279430389404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019111633300781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.003032922744751

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.003032922744751

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007479190826416

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007479190826416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.00056290626525879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1108' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015618801116943

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.00056290626525879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1108' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015618801116943

select fname,lname,mrdno from patient_registration where  patient_registration_id='1108' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044918060302734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044918060302734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066659450531006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066659450531006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00553297996521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066659450531006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00553297996521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066659450531006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00553297996521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026071071624756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0066659450531006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00553297996521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026071071624756

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069270133972168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010382890701294

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010382890701294

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.01117205619812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010382890701294

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.01117205619812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010119915008545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010382890701294

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.01117205619812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010119915008545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010765790939331

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010382890701294

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.01117205619812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010119915008545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018501281738281

select count(*) as cnt from patient_registration where  patient_registration_id= '663' and  office_id= '1' 
 Execution Time:0.0045368671417236

select count(*) as cnt from patient_registration where  patient_registration_id= '663' and  office_id= '1' 
 Execution Time:0.0045368671417236

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='663' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032069683074951

select count(*) as cnt from patient_registration where  patient_registration_id= '663' and  office_id= '1' 
 Execution Time:0.0045368671417236

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='663' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032069683074951

select fname,lname,mrdno from patient_registration where  patient_registration_id='663' and  office_id= '1' 
 Execution Time:0.0035591125488281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039629936218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039629936218262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033149719238281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034880638122559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034880638122559

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024878978729248

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048720836639404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048720836639404

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037331581115723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021951198577881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021951198577881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003882884979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021951198577881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003882884979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005018949508667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021951198577881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003882884979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005018949508667

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0073060989379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046720504760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042769908905029

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021951198577881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003882884979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005018949508667

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0073060989379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016956090927124

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052809715270996

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016810894012451

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016810894012451

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030109882354736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059986114501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059986114501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059986114501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059986114501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0084528923034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0084528923034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075299739837646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0084528923034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075299739837646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0084528923034668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075299739837646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017910003662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016758441925049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017910003662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016758441925049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017910003662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016758441925049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031630992889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017910003662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016758441925049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031630992889404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066421031951904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00040483474731445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1406' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024111270904541

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00040483474731445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1406' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024111270904541

select fname,lname,mrdno from patient_registration where  patient_registration_id='1406' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013680458068848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013680458068848

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033519268035889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033519268035889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033519268035889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033519268035889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033519268035889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002471923828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050349235534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050349235534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004810094833374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050349235534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004810094833374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007498025894165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050349235534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004810094833374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007498025894165

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039489269256592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050349235534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004810094833374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007498025894165

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039489269256592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073511600494385

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0023190975189209

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0023190975189209

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0031421184539795

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063514709472656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032460689544678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049376487731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049376487731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029680728912354

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010828971862793

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010828971862793

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045084953308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023090839385986

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036780834197998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036780834197998

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037999153137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020029544830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020029544830322

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020029544830322

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020029544830322

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030639171600342

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020029544830322

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088787078857422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062909126281738

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022521018981934

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022521018981934

select fname,lname,mrdno from patient_registration where  patient_registration_id='1399' and  office_id= '1' 
 Execution Time:0.001439094543457

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043797492980957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034098625183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034098625183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034098625183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034098625183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020339488983154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034098625183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020339488983154

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085279941558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007288932800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007288932800293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076971054077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035572052001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037720203399658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007288932800293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076971054077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010710000991821

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021190643310547

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021190643310547

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041060447692871

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029189586639404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029189586639404

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002892017364502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002892017364502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002892017364502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002892017364502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028941631317139

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027599334716797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027599334716797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027599334716797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027599334716797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027599334716797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00032210350036621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012741088867188

select count(*) as cnt from patient_registration where  patient_registration_id= '1399' and  office_id= '1' 
 Execution Time:0.00032210350036621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012741088867188

select fname,lname,mrdno from patient_registration where  patient_registration_id='1399' and  office_id= '1' 
 Execution Time:0.00015401840209961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022890567779541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022890567779541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00060319900512695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '1413' and  office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_registration where  patient_registration_id= '1413' and  office_id= '1' 
 Execution Time:0.00047492980957031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1413' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021140575408936

select count(*) as cnt from patient_registration where  patient_registration_id= '1413' and  office_id= '1' 
 Execution Time:0.00047492980957031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1413' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021140575408936

select fname,lname,mrdno from patient_registration where  patient_registration_id='1413' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097589492797852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097589492797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097589492797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097589492797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097589492797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020229816436768

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045030117034912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051610469818115

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051610469818115

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028400421142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040550231933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037870407104492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040550231933594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046069622039795

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017199516296387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017199516296387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0015060901641846

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0015060901641846

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029201507568359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057089328765869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017831325531006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057089328765869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064671039581299

select count(*) as cnt from patient_registration where  patient_registration_id= '1152' and  office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from patient_registration where  patient_registration_id= '1152' and  office_id= '1' 
 Execution Time:0.00072216987609863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1152' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031270980834961

select count(*) as cnt from patient_registration where  patient_registration_id= '1152' and  office_id= '1' 
 Execution Time:0.00072216987609863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1152' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031270980834961

select fname,lname,mrdno from patient_registration where  patient_registration_id='1152' and  office_id= '1' 
 Execution Time:0.00068211555480957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010731220245361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010731220245361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010731220245361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010731220245361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010731220245361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003342866897583

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00055098533630371

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0036478042602539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003756046295166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003756046295166

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038838386535645

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058009624481201

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058009624481201

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001262903213501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001262903213501

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001262903213501

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001262903213501

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.02100396156311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044510364532471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001262903213501

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062439441680908

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022821426391602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022821426391602

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034029483795166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079948902130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079948902130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079948902130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0079550743103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022060871124268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079948902130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0079550743103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060498714447021

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086712837219238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086712837219238

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00030684471130371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1316' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018661022186279

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00030684471130371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1316' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018661022186279

select fname,lname,mrdno from patient_registration where  patient_registration_id='1316' and  office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022659301757812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_registration where  patient_registration_id= '1286' and  office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from patient_registration where  patient_registration_id= '1286' and  office_id= '1' 
 Execution Time:0.00034213066101074

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1286' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012669563293457

select count(*) as cnt from patient_registration where  patient_registration_id= '1286' and  office_id= '1' 
 Execution Time:0.00034213066101074

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1286' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012669563293457

select fname,lname,mrdno from patient_registration where  patient_registration_id='1286' and  office_id= '1' 
 Execution Time:0.00016903877258301

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00034379959106445

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00034379959106445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1316' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021259784698486

select count(*) as cnt from patient_registration where  patient_registration_id= '1316' and  office_id= '1' 
 Execution Time:0.00034379959106445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1316' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021259784698486

select fname,lname,mrdno from patient_registration where  patient_registration_id='1316' and  office_id= '1' 
 Execution Time:0.00074100494384766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010490417480469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010490417480469

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018808841705322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018808841705322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018808841705322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018808841705322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018808841705322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012028932571411

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022940635681152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012028932571411

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053520202636719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019979476928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007789134979248

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007789134979248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023751258850098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047540664672852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023751258850098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select count(*) as cnt from patient_registration where  patient_registration_id= '1268' and  office_id= '1' 
 Execution Time:0.0035297870635986

select count(*) as cnt from patient_registration where  patient_registration_id= '1268' and  office_id= '1' 
 Execution Time:0.0035297870635986

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1268' and  doctors_registration.office_id= '1' 
 Execution Time:0.003835916519165

select count(*) as cnt from patient_registration where  patient_registration_id= '1268' and  office_id= '1' 
 Execution Time:0.0035297870635986

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1268' and  doctors_registration.office_id= '1' 
 Execution Time:0.003835916519165

select fname,lname,mrdno from patient_registration where  patient_registration_id='1268' and  office_id= '1' 
 Execution Time:0.0041251182556152

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025978088378906

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025978088378906

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010619163513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044009685516357

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017580986022949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010619163513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0063400268554688

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0063400268554688

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003821849822998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051131248474121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051131248474121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.012449026107788

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059938430786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010270118713379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068259239196777

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0080199241638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065112113952637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059938430786133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082359313964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0021591186523438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.0019898414611816

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015110969543457

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0019261837005615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00051379203796387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0059969425201416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032470226287842

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0023970603942871

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277


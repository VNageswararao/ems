select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024380683898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024380683898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024380683898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024380683898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026907920837402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024380683898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026907920837402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00052499771118164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018489360809326

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00052499771118164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018489360809326

select fname,lname,mrdno from patient_registration where  patient_registration_id='1630' and  office_id= '1' 
 Execution Time:0.0038349628448486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091195106506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091195106506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091195106506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091195106506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010731220245361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010731220245361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0071840286254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0071840286254883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037450790405273

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0027921199798584

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0027921199798584

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-23' and '2021-10-23' and  patient_registration.office_id= 1      
 Execution Time:0.0032799243927002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035538673400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078582763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078582763671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044858455657959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044858455657959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044858455657959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044858455657959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022809505462646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022809505462646

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0018010139465332

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0018010139465332

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-23' and '2021-10-23' and  patient_registration.office_id= 1      
 Execution Time:0.0042259693145752

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0017790794372559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0017790794372559

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-22' and '2021-10-22' and  patient_registration.office_id= 1      
 Execution Time:0.0034818649291992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025269985198975

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025269985198975

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015130043029785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00096583366394043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00096583366394043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053620338439941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013121128082275

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004227876663208

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004227876663208

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047590732574463

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019359588623047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019359588623047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072717666625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040280818939209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020179748535156

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020179748535156

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001568078994751

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076484680175781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076484680175781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037529468536377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046310424804688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046310424804688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046310424804688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046310424804688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039689540863037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046310424804688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039689540863037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069940090179443

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045490264892578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020289421081543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006401538848877

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006401538848877

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039582252502441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039582252502441

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004755973815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047509670257568

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004755973815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select count(*) as cnt from patient_registration where  patient_registration_id= '1695' and  office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from patient_registration where  patient_registration_id= '1695' and  office_id= '1' 
 Execution Time:0.00055909156799316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051901340484619

select count(*) as cnt from patient_registration where  patient_registration_id= '1695' and  office_id= '1' 
 Execution Time:0.00055909156799316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051901340484619

select fname,lname,mrdno from patient_registration where  patient_registration_id='1695' and  office_id= '1' 
 Execution Time:0.00301194190979

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051188468933105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049121379852295

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049121379852295

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029940605163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select count(*) as cnt from patient_registration where  patient_registration_id= '715' and  office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_registration where  patient_registration_id= '715' and  office_id= '1' 
 Execution Time:0.00062704086303711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='715' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024778842926025

select count(*) as cnt from patient_registration where  patient_registration_id= '715' and  office_id= '1' 
 Execution Time:0.00062704086303711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='715' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024778842926025

select fname,lname,mrdno from patient_registration where  patient_registration_id='715' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_registration where  patient_registration_id= '1741' and  office_id= '1' 
 Execution Time:0.0031681060791016

select count(*) as cnt from patient_registration where  patient_registration_id= '1741' and  office_id= '1' 
 Execution Time:0.0031681060791016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1741' and  doctors_registration.office_id= '1' 
 Execution Time:0.007375955581665

select count(*) as cnt from patient_registration where  patient_registration_id= '1741' and  office_id= '1' 
 Execution Time:0.0031681060791016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1741' and  doctors_registration.office_id= '1' 
 Execution Time:0.007375955581665

select fname,lname,mrdno from patient_registration where  patient_registration_id='1741' and  office_id= '1' 
 Execution Time:0.0029811859130859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018548965454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065128803253174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065128803253174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065128803253174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039620399475098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011539459228516

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065128803253174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039620399475098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045359134674072

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078487396240234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076913833618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053215026855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.00058197975158691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1522' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032329559326172

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.00058197975158691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1522' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032329559326172

select fname,lname,mrdno from patient_registration where  patient_registration_id='1522' and  office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049710273742676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032999515533447

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032999515533447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032999515533447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032999515533447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032999515533447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1522' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016119480133057

select count(*) as cnt from patient_registration where  patient_registration_id= '1522' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1522' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016119480133057

select fname,lname,mrdno from patient_registration where  patient_registration_id='1522' and  office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020739078521729

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020739078521729

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0016100406646729

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026900768280029

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026900768280029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026900768280029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026900768280029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.004302978515625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023510456085205

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044808387756348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044808387756348

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087308883666992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018019676208496

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018019676208496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035600662231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045211315155029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045211315155029

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036389827728271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038511753082275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045211315155029

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036389827728271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085229873657227

select count(*) as cnt from patient_registration where  patient_registration_id= '1696' and  office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_registration where  patient_registration_id= '1696' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1696' and  doctors_registration.office_id= '1' 
 Execution Time:0.002439022064209

select count(*) as cnt from patient_registration where  patient_registration_id= '1696' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1696' and  doctors_registration.office_id= '1' 
 Execution Time:0.002439022064209

select fname,lname,mrdno from patient_registration where  patient_registration_id='1696' and  office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.0017428398132324

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.0017428398132324

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1697' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076057910919189

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.0017428398132324

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1697' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076057910919189

select fname,lname,mrdno from patient_registration where  patient_registration_id='1697' and  office_id= '1' 
 Execution Time:0.002295970916748

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032649040222168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032649040222168

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038468837738037

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select count(*) as cnt from patient_registration where  patient_registration_id= '1778' and  office_id= '1' 
 Execution Time:0.0057990550994873

select count(*) as cnt from patient_registration where  patient_registration_id= '1778' and  office_id= '1' 
 Execution Time:0.0057990550994873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1778' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078928470611572

select count(*) as cnt from patient_registration where  patient_registration_id= '1778' and  office_id= '1' 
 Execution Time:0.0057990550994873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1778' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078928470611572

select fname,lname,mrdno from patient_registration where  patient_registration_id='1778' and  office_id= '1' 
 Execution Time:0.0088739395141602

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.001816987991333

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.001816987991333

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046911239624023

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.001816987991333

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046911239624023

select fname,lname,mrdno from patient_registration where  patient_registration_id='1780' and  office_id= '1' 
 Execution Time:0.0047581195831299

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0024549961090088

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0024549961090088

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038120746612549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005256175994873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005256175994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005256175994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005256175994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005256175994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034258365631104

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077400207519531

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00057601928710938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077400207519531

select fname,lname,mrdno from patient_registration where  patient_registration_id='1326' and  office_id= '1' 
 Execution Time:0.0034980773925781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011770725250244

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011770725250244

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020959377288818

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041470527648926

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041470527648926

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029001235961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041899681091309

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022039413452148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022039413452148

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078415870666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012490749359131

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012490749359131

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029449462890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029449462890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088629722595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029449462890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088629722595215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029449462890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088629722595215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0074038505554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041379928588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052220821380615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029449462890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088629722595215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0074038505554199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053579807281494

select count(*) as cnt from patient_registration where  patient_registration_id= '1490' and  office_id= '1' 
 Execution Time:0.0022451877593994

select count(*) as cnt from patient_registration where  patient_registration_id= '1490' and  office_id= '1' 
 Execution Time:0.0022451877593994

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1490' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054678916931152

select count(*) as cnt from patient_registration where  patient_registration_id= '1490' and  office_id= '1' 
 Execution Time:0.0022451877593994

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1490' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054678916931152

select fname,lname,mrdno from patient_registration where  patient_registration_id='1490' and  office_id= '1' 
 Execution Time:0.0017621517181396

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047390460968018

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047390460968018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013599395751953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056886672973633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056886672973633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007178783416748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007178783416748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003925085067749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003925085067749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003925085067749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003925085067749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019261837005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036218166351318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003925085067749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043919086456299

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0072879791259766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0072879791259766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0085079669952393

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086283683776855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035359859466553

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035359859466553

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015220642089844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038750171661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038750171661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034759044647217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038750171661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034759044647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040040016174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038750171661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034759044647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040040016174316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029861927032471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038750171661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034759044647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040040016174316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037930011749268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047011375427246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079939365386963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079939365386963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059130191802979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079939365386963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059130191802979

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079939365386963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059130191802979

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032470226287842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079939365386963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059130191802979

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032470226287842

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0088748931884766

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.005897045135498

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.005897045135498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041999816894531

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.005897045135498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041999816894531

select fname,lname,mrdno from patient_registration where  patient_registration_id='1780' and  office_id= '1' 
 Execution Time:0.0034160614013672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.033256053924561

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.033256053924561

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.007606029510498

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0066969394683838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.024180173873901

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.024180173873901

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007472038269043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.024180173873901

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007472038269043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056171417236328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.024180173873901

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007472038269043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056171417236328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.009760856628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.024180173873901

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007472038269043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056171417236328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.009760856628418

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0099470615386963

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0049071311950684

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0049071311950684

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0070939064025879

select count(*) as cnt from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0042529106140137

select count(*) as cnt from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0042529106140137

select * from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0028011798858643

select count(*) as cnt from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0042529106140137

select * from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0028011798858643

select * from billing_detail where  billing_master_id= '301' 
 Execution Time:0.0037500858306885

select count(*) as cnt from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0042529106140137

select * from billing_master where  billing_master_id= '301' and  office_id= '1' 
 Execution Time:0.0028011798858643

select * from billing_detail where  billing_master_id= '301' 
 Execution Time:0.0037500858306885

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0013790130615234

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.0013611316680908

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.0013611316680908

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048339366912842

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.0013611316680908

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048339366912842

select fname,lname,mrdno from patient_registration where  patient_registration_id='1780' and  office_id= '1' 
 Execution Time:0.0012149810791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037691593170166

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032517910003662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032517910003662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039000511169434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032517910003662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039000511169434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032517910003662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039000511169434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038199424743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032517910003662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039000511169434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038199424743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0053260326385498

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0053260326385498

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004770040512085

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052521228790283

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052521228790283

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022070407867432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005547046661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005547046661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0083291530609131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005547046661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0083291530609131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0066289901733398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005547046661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0083291530609131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0066289901733398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041449069976807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.009753942489624

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010894060134888

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005547046661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0083291530609131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0066289901733398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041449069976807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059049129486084

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0070540904998779

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065619945526123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065619945526123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065619945526123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016801357269287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065619945526123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016801357269287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065619945526123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016801357269287

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003835916519165

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047910213470459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041561126708984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041561126708984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041561126708984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041561126708984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051419734954834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041561126708984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034618377685547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065803527832031

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041739940643311

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041739940643311

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0119309425354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022308826446533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022308826446533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022308826446533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022308826446533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039939880371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022308826446533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045790672302246

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037078857421875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037078857421875

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048069953918457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019145965576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019145965576172

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063908100128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019145965576172

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063908100128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019145965576172

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063908100128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033118724822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038788318634033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019145965576172

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063908100128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033118724822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064270496368408

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033998489379883

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020830631256104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035121440887451

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024240016937256

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024240016937256

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021748542785645

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0057327747344971

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0057327747344971

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037968158721924

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032470226287842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022099018096924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022099018096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050430297851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022099018096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050430297851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013270378112793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041611194610596

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017656803131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022099018096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050430297851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013270378112793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064101219177246

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015671253204346

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015671253204346

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0061721801757812

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003587007522583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003587007522583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003587007522583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003587007522583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0071859359741211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049660205841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003587007522583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0071859359741211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060648918151855

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.014993906021118

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.014993906021118

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032351016998291

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037188529968262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037188529968262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033779144287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064771175384521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064771175384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064771175384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070409774780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064771175384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070409774780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012497901916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020620822906494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081071853637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064771175384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070409774780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.012497901916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021711826324463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036787986755371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036787986755371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039949417114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018410682678223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018410682678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057482719421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0013840198516846

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0013840198516846

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011699199676514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011699199676514

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014579296112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098705291748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098705291748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098705291748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012988090515137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098705291748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012988090515137

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058350563049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.023338079452515

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.024846076965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070090293884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098705291748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012988090515137

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058350563049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081989765167236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021038055419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021038055419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023469924926758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049080848693848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062241554260254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036451816558838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021038055419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023469924926758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0070509910583496

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0070509910583496

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0062179565429688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015840530395508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015840530395508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027430057525635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067398548126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067398548126221

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067398548126221

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067398548126221

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067918300628662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091791152954102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083110332489014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067398548126221

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067918300628662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011396884918213

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.014080047607422

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.014080047607422

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0062289237976074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00547194480896

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00547194480896

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0076010227203369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037970542907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037970542907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037970542907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033161640167236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037970542907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030908584594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033161640167236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064868927001953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0060498714447021

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0060498714447021

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012969970703125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012969970703125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033488273620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033488273620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033488273620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033488273620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028510093688965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033681392669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033488273620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084495544433594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039281845092773

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060796737670898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032060146331787

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035250186920166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035250186920166

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039489269256592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017299652099609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017299652099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017299652099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017299652099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017299652099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043618679046631

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0031909942626953

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0031909942626953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.011767148971558

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0031909942626953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.011767148971558

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.0067818164825439

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027091503143311

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027091503143311

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027661323547363

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.027274131774902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.027274131774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.02397894859314

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030491352081299

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030491352081299

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005742073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037088394165039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037088394165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012702941894531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037088394165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012702941894531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073609352111816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037088394165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012702941894531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073609352111816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0065419673919678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067689418792725

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037088394165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012702941894531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0073609352111816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0065419673919678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011631965637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001209020614624

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001209020614624

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024161338806152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.0039279460906982

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.0039279460906982

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1597' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037031173706055

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.0039279460906982

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1597' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037031173706055

select fname,lname,mrdno from patient_registration where  patient_registration_id='1597' and  office_id= '1' 
 Execution Time:0.0040569305419922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016980171203613

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016980171203613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035429000854492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011031627655029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011031627655029

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081160068511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033860206604004

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033860206604004

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002410888671875

select count(*) as cnt from patient_registration where  patient_registration_id= '1738' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '1738' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1738' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024480819702148

select count(*) as cnt from patient_registration where  patient_registration_id= '1738' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1738' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024480819702148

select fname,lname,mrdno from patient_registration where  patient_registration_id='1738' and  office_id= '1' 
 Execution Time:0.001183032989502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051712989807129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030920505523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035040378570557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035040378570557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065879821777344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035040378570557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065879821777344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035040378570557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065879821777344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0072460174560547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00673508644104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052378177642822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035040378570557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065879821777344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0072460174560547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077500343322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032720565795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032720565795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013285875320435

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032720565795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013285875320435

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032720565795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013285875320435

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053689479827881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013328075408936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012338876724243

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032720565795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013285875320435

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053689479827881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010699987411499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055439472198486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055439472198486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055439472198486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048139095306396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055439472198486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048139095306396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055439472198486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048139095306396

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019550323486328

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016369819641113

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016369819641113

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00025320053100586

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020439624786377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020439624786377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005497932434082

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0015969276428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065488815307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065488815307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065488815307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066180229187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065488815307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066180229187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.007735013961792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065488815307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066180229187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.007735013961792

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012071132659912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003795862197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003795862197876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003795862197876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003795862197876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037298202514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003795862197876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037298202514648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083458423614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00494384765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00494384765625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041940212249756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026099681854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016348361968994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00494384765625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041940212249756

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058610439300537

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048298835754395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048298835754395

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.01216983795166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010410070419312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010410070419312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004810094833374

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0026600360870361

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0026600360870361

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.003486156463623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072884559631348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072884559631348

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022838115692139

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030829906463623

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030829906463623

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028419494628906

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010910034179688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010910034179688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029227733612061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011940002441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040121078491211

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040121078491211

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039401054382324

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031239986419678

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031239986419678

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045759677886963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.021383047103882

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.021383047103882

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098381042480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.021383047103882

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098381042480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010006904602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.021383047103882

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098381042480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010006904602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0082719326019287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013546943664551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011218070983887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.021383047103882

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0098381042480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010006904602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085806846618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.040241956710815

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0034019947052002

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0034019947052002

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0037591457366943

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0056672096252441

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0056672096252441

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.014324903488159

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032389163970947

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032389163970947

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027370452880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0063199996948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0063199996948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0063199996948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043601989746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0063199996948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043601989746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036540031433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011070966720581

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0063199996948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043601989746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036540031433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095219612121582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0052039623260498

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0052039623260498

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001183032989502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031039714813232

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031039714813232

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039520263671875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.01296591758728

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.01296591758728

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.016819000244141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011770009994507

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011770009994507

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071930885314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011770009994507

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071930885314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003648042678833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011770009994507

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071930885314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003648042678833

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0090429782867432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.026044130325317

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012810945510864

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017775058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011770009994507

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071930885314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003648042678833

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0090429782867432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082118511199951

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0055050849914551

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0055050849914551

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0078279972076416

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038769245147705

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038769245147705

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003838062286377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032570362091064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068390369415283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068390369415283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068390369415283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068390369415283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032541751861572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068390369415283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032541751861572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010530948638916

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0045390129089355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0045390129089355

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0065221786499023

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071971416473389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071971416473389

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0073819160461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072460174560547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072460174560547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072460174560547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072460174560547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037541389465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013231992721558

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012198209762573

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032939910888672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072460174560547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037541389465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014465093612671

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040249824523926

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040249824523926

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038578510284424

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044050216674805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044050216674805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037291049957275

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0078251361846924

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0078251361846924

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088088512420654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046169757843018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046169757843018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063521862030029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046169757843018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063521862030029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050129890441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046169757843018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063521862030029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050129890441895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027148723602295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013128995895386

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004680871963501

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081570148468018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046169757843018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0063521862030029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050129890441895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027148723602295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012614965438843

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068309307098389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068309307098389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068309307098389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042638778686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068309307098389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042638778686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076489448547363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016815185546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068309307098389

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042638778686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014415979385376

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014469623565674

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014469623565674

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018229484558105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0060181617736816

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0060181617736816

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052909851074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072569847106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072569847106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072569847106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011636972427368

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072569847106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011636972427368

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016968011856079

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012746095657349

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072569847106934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011636972427368

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037829875946045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011101007461548

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0041460990905762

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0041460990905762

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034561157226562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032238960266113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032238960266113

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0046288967132568

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.023502826690674

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.023502826690674

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049929618835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042970180511475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042970180511475

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042970180511475

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042970180511475

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048830509185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042970180511475

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027148723602295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048830509185791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084209442138672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073504447937012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011250972747803

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011250972747803

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002701997756958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.017280101776123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.017280101776123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.017280101776123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.017280101776123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011152982711792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085029602050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.017280101776123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011152982711792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011468172073364


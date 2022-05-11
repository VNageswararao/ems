select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037059783935547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037059783935547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037059783935547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063929557800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037059783935547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063929557800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0061900615692139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037059783935547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063929557800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0061900615692139

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015289783477783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010881185531616

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015289783477783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010881185531616

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015289783477783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010881185531616

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.009192943572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011207103729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053989887237549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.01009202003479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015289783477783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010881185531616

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.009192943572998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010740756988525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021390914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042910575866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042910575866699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042910575866699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042910575866699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042910575866699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082206726074219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034370422363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041079521179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-16' and  '2021-10-16' and  billing_master.office_id= 1        
 Execution Time:0.0015950202941895

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-16' and  '2021-10-16' and  billing_master.office_id= 1        
 Execution Time:0.0015950202941895

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-16' and '2021-10-16' and  patient_registration.office_id= 1      
 Execution Time:0.025036096572876

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.027517080307007

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0018579959869385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051617622375488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051617622375488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051617622375488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010151863098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051617622375488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010151863098145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023000240325928

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00054788589477539

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065803527832031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009000301361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009000301361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009000301361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0097651481628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014030933380127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009000301361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0097651481628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.010452032089233

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.010452032089233

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063290596008301

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.010452032089233

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063290596008301

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069594383239746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0048420429229736

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0048420429229736

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016708374023438

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012328624725342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012328624725342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0041759014129639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '308' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '308' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='308' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032219886779785

select count(*) as cnt from patient_registration where  patient_registration_id= '308' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='308' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032219886779785

select fname,lname,mrdno from patient_registration where  patient_registration_id='308' and  office_id= '1' 
 Execution Time:0.0033540725708008

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037491321563721

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037491321563721

select fname,lname,mrdno from patient_registration where  patient_registration_id='1334' and  office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0034399032592773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038537979125977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033860206604004

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033860206604004

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032939910888672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032939910888672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037550926208496

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037550926208496

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037550926208496

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023128986358643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037550926208496

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023128986358643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0036978721618652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00070500373840332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019230842590332

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00070500373840332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019230842590332

select fname,lname,mrdno from patient_registration where  patient_registration_id='1573' and  office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012209415435791

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012209415435791

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011980533599854

select count(*) as cnt from patient_registration where  patient_registration_id= '1415' and  office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from patient_registration where  patient_registration_id= '1415' and  office_id= '1' 
 Execution Time:0.0010099411010742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1415' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051047801971436

select count(*) as cnt from patient_registration where  patient_registration_id= '1415' and  office_id= '1' 
 Execution Time:0.0010099411010742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1415' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051047801971436

select fname,lname,mrdno from patient_registration where  patient_registration_id='1415' and  office_id= '1' 
 Execution Time:0.0072431564331055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037999153137207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037999153137207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030050277709961

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00042486190795898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025641918182373

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00042486190795898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025641918182373

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0063679218292236

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0063679218292236

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074410438537598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069689750671387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069689750671387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045180320739746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select count(*) as cnt from patient_registration where  patient_registration_id= '1393' and  office_id= '1' 
 Execution Time:0.0025248527526855

select count(*) as cnt from patient_registration where  patient_registration_id= '1393' and  office_id= '1' 
 Execution Time:0.0025248527526855

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1393' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016031265258789

select count(*) as cnt from patient_registration where  patient_registration_id= '1393' and  office_id= '1' 
 Execution Time:0.0025248527526855

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1393' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016031265258789

select fname,lname,mrdno from patient_registration where  patient_registration_id='1393' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040221214294434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0064060688018799

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0064060688018799

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044469833374023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044469833374023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033128261566162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044469833374023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033128261566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044469833374023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033128261566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044469833374023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033128261566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067358016967773

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048890113830566

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048890113830566

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012030601501465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003741979598999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003741979598999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003741979598999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003741979598999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003741979598999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035848617553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003957986831665

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005791187286377

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024058818817139

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024058818817139

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0047039985656738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044822692871094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044822692871094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044822692871094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044822692871094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014650821685791

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013158321380615

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069611072540283

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069611072540283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069611072540283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022051334381104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069611072540283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022051334381104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0050151348114014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069611072540283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022051334381104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0050151348114014

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044329166412354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044329166412354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044329166412354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044329166412354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044329166412354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028440952301025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085306167602539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085306167602539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085306167602539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074450969696045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085306167602539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042181015014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042181015014648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042181015014648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042181015014648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031540393829346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042181015014648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031540393829346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055768489837646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032241344451904

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032241344451904

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014870166778564

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085616111755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085616111755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048151016235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048151016235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048151016235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048151016235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037689208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055608749389648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048151016235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037689208984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055489540100098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055489540100098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055489540100098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055489540100098

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036261081695557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0041849613189697

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00063610076904297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041630268096924

select count(*) as cnt from patient_registration where  patient_registration_id= '1573' and  office_id= '1' 
 Execution Time:0.00063610076904297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041630268096924

select fname,lname,mrdno from patient_registration where  patient_registration_id='1573' and  office_id= '1' 
 Execution Time:0.0017750263214111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044300556182861

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044300556182861

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055909156799316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055909156799316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055909156799316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012009143829346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012598037719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055909156799316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012009143829346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040030479431152

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040030479431152

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0056970119476318

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00343918800354

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013749599456787

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013749599456787

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024158954620361

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003756046295166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003756046295166

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023429393768311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019760131835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019760131835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019760131835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019760131835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019371509552002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019760131835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019371509552002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029201507568359

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010418891906738

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010418891906738

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0060081481933594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0060081481933594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001600980758667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001600980758667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001600980758667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001600980758667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042030811309814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028948783874512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001600980758667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042030811309814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085139274597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066890716552734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066890716552734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060019493103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066890716552734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060019493103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0062239170074463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066890716552734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060019493103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0062239170074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0070159435272217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066890716552734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060019493103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0062239170074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0070159435272217

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030767917633057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030767917633057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030767917633057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030767917633057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001622200012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.006134033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030767917633057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001622200012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045640468597412

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058279037475586

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058279037475586

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047459602355957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0059399604797363

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0059399604797363

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0090320110321045

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021315813064575

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021315813064575

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036580562591553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043439865112305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043439865112305

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.017010927200317

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014102935791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081260204315186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043439865112305

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.017010927200317

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01247501373291

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039815902709961

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00079798698425293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054991245269775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054991245269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054991245269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051369667053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045011043548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031678676605225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054991245269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051369667053223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090329647064209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044584274291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039920806884766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039920806884766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037961006164551

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016491413116455

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016491413116455

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038809776306152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038809776306152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038809776306152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038809776306152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066049098968506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039491653442383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038809776306152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066049098968506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015804052352905

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054717063903809

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033309459686279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033309459686279

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046470165252686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035600662231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035600662231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035600662231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035600662231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037660598754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062580108642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035600662231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037660598754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036079883575439

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025649070739746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025649070739746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012078285217285

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012078285217285

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0066559314727783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097894668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097894668579102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018508434295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097894668579102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018508434295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097894668579102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018508434295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036709308624268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046930313110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0066099166870117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097894668579102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018508434295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036709308624268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045650005340576

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0033628940582275

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0033628940582275

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0028009414672852

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018200874328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036990642547607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019199848175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018200874328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044140815734863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0073950290679932

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0073950290679932

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039129257202148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024747848510742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.002673864364624

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.002673864364624

select fname,lname,mrdno from patient_registration where  patient_registration_id='1468' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002723217010498

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002723217010498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0041489601135254

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00096607208251953

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00096607208251953

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064408779144287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064408779144287

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0084559917449951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064408779144287

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0084559917449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064408779144287

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0084559917449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051290988922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012748241424561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0064408779144287

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0084559917449951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037658214569092

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051290988922119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080690383911133

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077199935913086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077199935913086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00111985206604

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00111985206604

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082588195800781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021870136260986

select count(*) as cnt from patient_registration where  patient_registration_id= '1452' and  office_id= '1' 
 Execution Time:0.001121997833252

select count(*) as cnt from patient_registration where  patient_registration_id= '1452' and  office_id= '1' 
 Execution Time:0.001121997833252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1452' and  doctors_registration.office_id= '1' 
 Execution Time:0.003450870513916

select count(*) as cnt from patient_registration where  patient_registration_id= '1452' and  office_id= '1' 
 Execution Time:0.001121997833252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1452' and  doctors_registration.office_id= '1' 
 Execution Time:0.003450870513916

select fname,lname,mrdno from patient_registration where  patient_registration_id='1452' and  office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079607963562012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079607963562012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017769336700439

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0042259693145752

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0042259693145752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038471221923828

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0042259693145752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038471221923828

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.0037410259246826

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049049854278564

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049049854278564

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0078229904174805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038530826568604

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038530826568604

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083708763122559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028090476989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028090476989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028090476989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003399133682251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028090476989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003399133682251

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046548843383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011756896972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028090476989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003399133682251

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046548843383789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060482025146484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054287910461426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028228759765625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030272006988525

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011341571807861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011489391326904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011341571807861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034029483795166

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0033450126647949

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0033450126647949

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042719841003418

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0033450126647949

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042719841003418

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.0052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095529556274414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095529556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.013442039489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095529556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.013442039489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0096337795257568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095529556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.013442039489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0096337795257568

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.005612850189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095529556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.013442039489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0096337795257568

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.005612850189209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023190975189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047640800476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047640800476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047640800476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047640800476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037760734558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025970935821533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047640800476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037760734558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081429481506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0056700706481934

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0056700706481934

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031459331512451

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0056700706481934

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031459331512451

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.0032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037782192230225

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037782192230225

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00095105171203613

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00095105171203613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030319690704346

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00095105171203613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030319690704346

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.015071153640747

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.015071153640747

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033600330352783

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00079703330993652

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0051229000091553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080010890960693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080010890960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080010890960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0072579383850098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080010890960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0072579383850098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080010890960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027670860290527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0072579383850098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003371000289917

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070285797119141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032069683074951

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040900707244873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040900707244873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030372142791748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088388919830322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088388919830322

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038609504699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00229811668396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016446113586426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0099899768829346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054969787597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00229811668396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037071704864502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037071704864502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037450790405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037071704864502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037450790405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037071704864502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037450790405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042212009429932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037071704864502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037450790405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042212009429932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063340663909912

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015869140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015869140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015869140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015418529510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015869140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044028759002686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027890205383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027890205383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027890205383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027890205383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017468929290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039870738983154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027890205383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017468929290771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071439743041992

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058293342590332

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072121620178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072121620178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028448104858398

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0072751045227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028460025787354

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052368640899658

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052368640899658

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029261112213135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043590068817139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043590068817139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011614084243774

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043590068817139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011614084243774

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056710243225098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043590068817139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011614084243774

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056710243225098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0071580410003662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026309490203857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051510334014893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043590068817139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011614084243774

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056710243225098

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0071580410003662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0043880939483643

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0043880939483643

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038208961486816

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023260116577148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023260116577148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041477680206299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079419612884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079419612884521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021328926086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079419612884521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010951995849609

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019919872283936

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019919872283936

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00347900390625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075638294219971

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075638294219971

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059168338775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049979686737061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049979686737061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049979686737061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049979686737061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005748987197876

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049979686737061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054259300231934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036039352416992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036039352416992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034589767456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034589767456055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034589767456055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034589767456055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039129257202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049431324005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037150382995605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034589767456055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039129257202148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081369876861572

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018281936645508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018281936645508

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013449192047119

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029258728027344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017937183380127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027990341186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043258666992188

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042250156402588

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042250156402588

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0063738822937012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082993507385254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082993507385254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058913230895996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066304206848145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066304206848145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066304206848145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019700527191162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066304206848145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019700527191162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045089721679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046532154083252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082588195800781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082588195800781

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014100074768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00068783760070801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0029189586639404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075602531433105

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00075602531433105

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002129077911377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00067710876464844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032210350036621

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032210350036621

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038459300994873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038800239562988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038800239562988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079011917114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079011917114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079011917114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079011917114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064492225646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004288911819458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.013333082199097

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.013333082199097

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.013333082199097

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.019157886505127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019137859344482

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019137859344482

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008389949798584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050806999206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032391548156738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036838054656982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049340724945068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049340724945068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003486156463623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049340724945068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003486156463623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036270618438721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049340724945068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003486156463623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036270618438721

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.00073385238647461

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.00073385238647461

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0020279884338379

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-18' and '2021-10-18' and  billing_master.office_id= 1         
 Execution Time:0.0017471313476562

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-18' and '2021-10-18' and  billing_master.office_id= 1         
 Execution Time:0.0017471313476562

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0020298957824707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-18' and '2021-10-18' and  billing_master.office_id= 1         
 Execution Time:0.0017471313476562

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0020298957824707

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-18' and '2021-10-18' and  billing_master.office_id= 1         
 Execution Time:0.0017471313476562

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0020298957824707

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019383430480957

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-18' and '2021-10-18' and  billing_master.office_id= 1         
 Execution Time:0.0017471313476562

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0020298957824707

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019383430480957

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00018787384033203

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.001384973526001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004755973815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018119812011719

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004755973815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090830326080322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051751136779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051751136779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0088069438934326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051751136779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0088069438934326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051751136779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0088069438934326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051751136779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0088069438934326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0055460929870605

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0055460929870605

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0044200420379639

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.0035250186920166

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.0035250186920166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078108310699463

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.0035250186920166

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078108310699463

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.001507043838501

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0040221214294434

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0040221214294434

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077371597290039

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0040221214294434

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077371597290039

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0034089088439941

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0093889236450195

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0093889236450195

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037140846252441

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.0093889236450195

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037140846252441

select fname,lname,mrdno from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.0036900043487549

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024318695068359

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024318695068359

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.003777027130127

select * from opdcharge where  opdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.0026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029201507568359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037431716918945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037431716918945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068469047546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003483772277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003483772277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042729377746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003483772277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042729377746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0011730194091797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014998912811279

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0033040046691895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003889799118042

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0075318813323975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004486083984375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0015201568603516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028960704803467


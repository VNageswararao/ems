select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030531883239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030531883239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012510061264038

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030531883239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012510061264038

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030531883239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012510061264038

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003371000289917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041449069976807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046851634979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003032922744751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030531883239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012510061264038

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003371000289917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097169876098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013840198516846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013840198516846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select count(*) as cnt from patient_registration where  patient_registration_id= '2974' and  office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '2974' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2974' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038459300994873

select count(*) as cnt from patient_registration where  patient_registration_id= '2974' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2974' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038459300994873

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2974' and  office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037217140197754

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00062108039855957

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00019621849060059

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023331642150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043470859527588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060091018676758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060091018676758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060091018676758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026137828826904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060091018676758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026137828826904

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026278495788574

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-11' and  '2021-12-11' and  billing_master.office_id= 1        
 Execution Time:0.0023789405822754

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-11' and  '2021-12-11' and  billing_master.office_id= 1        
 Execution Time:0.0023789405822754

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-11' and '2021-12-11' and  patient_registration.office_id= 1      
 Execution Time:0.0064589977264404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020918846130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020918846130371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00072479248046875

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00072479248046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057480335235596

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00072479248046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057480335235596

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3240' and  office_id= '1' 
 Execution Time:0.00807785987854

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0026130676269531

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0026130676269531

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017390251159668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019700527191162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019700527191162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019700527191162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0089960098266602

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00046205520629883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045089721679688

select count(*) as cnt from patient_registration where  patient_registration_id= '3240' and  office_id= '1' 
 Execution Time:0.00046205520629883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3240' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045089721679688

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3240' and  office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044341087341309

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044341087341309

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045981407165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045981407165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045981407165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045981407165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045981407165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006397008895874

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0085041522979736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050439834594727

select count(*) as cnt from patient_registration where  patient_registration_id= '3368' and  office_id= '1' 
 Execution Time:0.00088906288146973

select count(*) as cnt from patient_registration where  patient_registration_id= '3368' and  office_id= '1' 
 Execution Time:0.00088906288146973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3368' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045430660247803

select count(*) as cnt from patient_registration where  patient_registration_id= '3368' and  office_id= '1' 
 Execution Time:0.00088906288146973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3368' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045430660247803

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3368' and  office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011289119720459

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011289119720459

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_registration where  patient_registration_id= '2643' and  office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from patient_registration where  patient_registration_id= '2643' and  office_id= '1' 
 Execution Time:0.00039410591125488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2643' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051407814025879

select count(*) as cnt from patient_registration where  patient_registration_id= '2643' and  office_id= '1' 
 Execution Time:0.00039410591125488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2643' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051407814025879

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2643' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066113471984863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091195106506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011856079101562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038461685180664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086579322814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082619190216064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082619190216064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082619190216064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082619190216064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082619190216064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064470767974854

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099802017211914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010240077972412

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010240077972412

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067591667175293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067591667175293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069580078125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010290145874023

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010290145874023

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039329528808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039329528808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016889572143555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039329528808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016889572143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039329528808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016889572143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039329528808594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016889572143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015369176864624

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026991367340088

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026991367340088

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047810077667236

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00051712989807129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011978149414062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011978149414062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011978149414062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011978149414062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024619102478027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011978149414062

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066709518432617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037312507629395

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078010559082031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040078163146973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010143995285034

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063705444335938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048098564147949

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092315673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010499954223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090193748474121

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070381164550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070381164550781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070381164550781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070381164550781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070381164550781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054111480712891

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043416023254395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017838478088379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017838478088379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077888965606689

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.00051307678222656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3253' and  doctors_registration.office_id= '1' 
 Execution Time:0.0087900161743164

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.00051307678222656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3253' and  doctors_registration.office_id= '1' 
 Execution Time:0.0087900161743164

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3253' and  office_id= '1' 
 Execution Time:0.0024969577789307

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041007995605469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038070678710938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038070678710938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038168430328369

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019290447235107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019290447235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036759376525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039567947387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019290447235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036759376525879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090510845184326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092220306396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092220306396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004288911819458

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005950927734375

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023722648620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023722648620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023722648620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023722648620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023722648620605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053110122680664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096583366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096583366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096583366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011470317840576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096583366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011470317840576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.017494916915894

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016880035400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029380321502686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016880035400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029380321502686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016880035400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029380321502686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016880035400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029380321502686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013949871063232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077190399169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026500225067139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026500225067139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00066590309143066

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047070980072021

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077509880065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053369998931885

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003075122833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003075122833252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003075122833252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003075122833252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003075122833252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009310245513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079011917114258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079011917114258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033712387084961

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073070526123047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056650638580322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056650638580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056650638580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056650638580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056650638580322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042459964752197

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086402893066406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067861080169678

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010850429534912

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010850429534912

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014429092407227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026822090148926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026822090148926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026822090148926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026822090148926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058238506317139

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010309219360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010309219360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070500373840332

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0014400482177734

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0014400482177734

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018370151519775

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018370151519775

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0099129676818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013659000396729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013659000396729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057196617126465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0090761184692383

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0090761184692383

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094389915466309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035979747772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077331066131592

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057506561279297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056982040405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059990882873535

select count(*) as cnt from patient_registration where  patient_registration_id= '3059' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '3059' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3059' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084531307220459

select count(*) as cnt from patient_registration where  patient_registration_id= '3059' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3059' and  doctors_registration.office_id= '1' 
 Execution Time:0.0084531307220459

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3059' and  office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022850036621094

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022850036621094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021347999572754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021347999572754

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007469654083252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004878044128418

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004878044128418

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004878044128418

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004878044128418

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061769485473633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078296661376953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00086402893066406

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045881271362305

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079107284545898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00044798851013184

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002281665802002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066730976104736

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070691108703613

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070691108703613

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032618045806885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060808658599854

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091290473937988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091290473937988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022039413452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022039413452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022039413452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022039413452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022039413452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004880428314209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004180908203125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039968490600586

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039968490600586

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043258666992188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014328956604004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062577724456787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062577724456787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062577724456787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062577724456787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062577724456787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002018928527832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047249794006348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047249794006348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047249794006348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047249794006348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047249794006348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060410499572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060410499572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060410499572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060410499572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060410499572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select count(*) as cnt from patient_registration where  patient_registration_id= '3442' and  office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from patient_registration where  patient_registration_id= '3442' and  office_id= '1' 
 Execution Time:0.00055909156799316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3442' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048108100891113

select count(*) as cnt from patient_registration where  patient_registration_id= '3442' and  office_id= '1' 
 Execution Time:0.00055909156799316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3442' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048108100891113

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3442' and  office_id= '1' 
 Execution Time:0.0013389587402344

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031461715698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031461715698242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072429180145264

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072429180145264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072429180145264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072429180145264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072429180145264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057888031005859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057888031005859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057888031005859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081777572631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057888031005859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081777572631836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070159435272217

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00074601173400879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089383125305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089383125305176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078680515289307

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071907043457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024471282958984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024471282958984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019681453704834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024471282958984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019681453704834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024471282958984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019681453704834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003162145614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024471282958984

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019681453704834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003162145614624

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316


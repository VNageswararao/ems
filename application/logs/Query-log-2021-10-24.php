select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020220279693604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020220279693604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020220279693604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020821094512939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020220279693604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020821094512939

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0014479160308838

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-22' and  '2021-10-22' and  billing_master.office_id= 1        
 Execution Time:0.0014479160308838

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-22' and '2021-10-22' and  patient_registration.office_id= 1      
 Execution Time:0.0038378238677979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020670890808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020670890808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020670890808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021951198577881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025029182434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020670890808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021951198577881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0012500286102295

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0012500286102295

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-23' and '2021-10-23' and  patient_registration.office_id= 1      
 Execution Time:0.0023300647735596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025091171264648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061392784118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010440349578857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036079883575439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0005490779876709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032961368560791

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.0005490779876709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032961368560791

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016660690307617

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016660690307617

select fname,lname,mrdno from patient_registration where  patient_registration_id='1630' and  office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043201446533203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045127868652344

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043201446533203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045127868652344

select fname,lname,mrdno from patient_registration where  patient_registration_id='1595' and  office_id= '1' 
 Execution Time:0.0034899711608887

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019931793212891

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00055789947509766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029201507568359

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00055789947509766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029201507568359

select fname,lname,mrdno from patient_registration where  patient_registration_id='1659' and  office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064206123352051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024850368499756

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024850368499756

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014870166778564

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061988830566406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061988830566406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087618827819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020430088043213

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087618827819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078296661376953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010249614715576

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010249614715576

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008080005645752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00050187110900879

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068521499633789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068521499633789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00288987159729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.0011138916015625

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.0011138916015625

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036020278930664

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.0011138916015625

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036020278930664

select fname,lname,mrdno from patient_registration where  patient_registration_id='1752' and  office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031280517578125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056719779968262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035128593444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select count(*) as cnt from patient_registration where  patient_registration_id= '1783' and  office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from patient_registration where  patient_registration_id= '1783' and  office_id= '1' 
 Execution Time:0.00045585632324219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1783' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020339488983154

select count(*) as cnt from patient_registration where  patient_registration_id= '1783' and  office_id= '1' 
 Execution Time:0.00045585632324219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1783' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020339488983154

select fname,lname,mrdno from patient_registration where  patient_registration_id='1783' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058197975158691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026512145996094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024421215057373

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024421215057373

select fname,lname,mrdno from patient_registration where  patient_registration_id='1752' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029191970825195

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029191970825195

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030529499053955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010387897491455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072884559631348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000518798828125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000518798828125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001981258392334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015020370483398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015020370483398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025990009307861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013909339904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013909339904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013909339904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013909339904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092315673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013909339904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019779205322266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092315673828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049378871917725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049378871917725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049378871917725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049378871917725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011980533599854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019121170043945

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0015008449554443

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-23' and  '2021-10-23' and  billing_master.office_id= 1        
 Execution Time:0.0015008449554443

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-23' and '2021-10-23' and  patient_registration.office_id= 1      
 Execution Time:0.0024161338806152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021522045135498

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073385238647461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073385238647461

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='404' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017659664154053

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='404' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017659664154053

select fname,lname,mrdno from patient_registration where  patient_registration_id='404' and  office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00017595291137695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0046579837799072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036020278930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0046579837799072

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014281272888184

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-24' and  '2021-10-24' and  billing_master.office_id= 1        
 Execution Time:0.0028948783874512

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-24' and  '2021-10-24' and  billing_master.office_id= 1        
 Execution Time:0.0028948783874512

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-24' and '2021-10-24' and  patient_registration.office_id= 1      
 Execution Time:0.0065431594848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066518783569336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025680065155029

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059294700622559

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059986114501953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003140926361084


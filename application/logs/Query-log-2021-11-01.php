select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-29' and  '2021-10-29' and  billing_master.office_id= 1        
 Execution Time:0.001417875289917

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-29' and  '2021-10-29' and  billing_master.office_id= 1        
 Execution Time:0.001417875289917

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-29' and '2021-10-29' and  patient_registration.office_id= 1      
 Execution Time:0.0047910213470459

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-30' and  '2021-10-30' and  billing_master.office_id= 1        
 Execution Time:0.0019409656524658

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-30' and  '2021-10-30' and  billing_master.office_id= 1        
 Execution Time:0.0019409656524658

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-30' and '2021-10-30' and  patient_registration.office_id= 1      
 Execution Time:0.0026929378509521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021648406982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021648406982422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027248859405518

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049495697021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039091110229492

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039315223693848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002129077911377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026981830596924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004986047744751

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00046896934509277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.002155065536499

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00046896934509277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.002155065536499

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044083595275879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044083595275879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085592269897461

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085592269897461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052213668823242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041298866271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042738914489746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042738914489746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035250186920166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002514123916626

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012137889862061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032901763916016

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056695938110352

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038399696350098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038399696350098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038399696350098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038399696350098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038399696350098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0042209625244141

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0042209625244141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033421516418457

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0042209625244141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033421516418457

select fname,lname,mrdno from patient_registration where  patient_registration_id='1772' and  office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031969547271729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031969547271729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031969547271729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031969547271729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031969547271729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.00047802925109863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033390522003174

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.00047802925109863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033390522003174

select fname,lname,mrdno from patient_registration where  patient_registration_id='1772' and  office_id= '1' 
 Execution Time:0.00034618377685547

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025169849395752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025169849395752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004058837890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00098609924316406

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00098609924316406

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0016248226165771

select count(*) as cnt from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00033187866210938

select * from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00020885467529297

select count(*) as cnt from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00033187866210938

select * from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00020885467529297

select * from billing_detail where  billing_master_id= '325' 
 Execution Time:0.00033688545227051

select count(*) as cnt from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00033187866210938

select * from billing_master where  billing_master_id= '325' and  office_id= '1' 
 Execution Time:0.00020885467529297

select * from billing_detail where  billing_master_id= '325' 
 Execution Time:0.00033688545227051

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031940937042236

select count(*) as cnt from patient_registration where  patient_registration_id= '1772' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1772' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031940937042236

select fname,lname,mrdno from patient_registration where  patient_registration_id='1772' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025429725646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025429725646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025429725646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025429725646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025429725646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025789737701416

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068879127502441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040538311004639

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076889991760254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076889991760254

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089192390441895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018320083618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018320083618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041751861572266

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075697898864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081706047058105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017976760864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025138854980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025138854980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025138854980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025138854980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025138854980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045013427734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020699501037598

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045013427734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020699501037598

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038049221038818

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038049221038818

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012331008911133

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025801658630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025801658630371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028500556945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004727840423584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004727840423584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004727840423584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004727840423584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004727840423584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039410591125488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091314315795898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091314315795898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043420791625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043821334838867

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043821334838867

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006108283996582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0025050640106201

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0025050640106201

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030457973480225

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0025050640106201

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030457973480225

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.0033178329467773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006558895111084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019099712371826

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036120414733887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00223708152771

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051522254943848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051522254943848

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015599727630615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015599727630615

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041520595550537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028560161590576

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028560161590576

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040950775146484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004417896270752

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004417896270752

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00337815284729

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051712989807129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018079280853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018079280853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018079280853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018079280853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022330284118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018079280853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022330284118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043599605560303

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091195106506348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091195106506348

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022192001342773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050902366638184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063650608062744

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089597702026367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089597702026367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026688575744629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033509731292725

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033509731292725

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037691593170166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030970573425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0006101131439209

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0006101131439209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.003303050994873

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0006101131439209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.003303050994873

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.00057411193847656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095105171203613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095105171203613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094199180603027

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00071501731872559

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.0036740303039551

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.0036740303039551

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038769245147705

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.0036740303039551

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038769245147705

select fname,lname,mrdno from patient_registration where  patient_registration_id='2041' and  office_id= '1' 
 Execution Time:0.0037899017333984

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092697143554688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092697143554688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00075316429138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065171718597412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065171718597412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065171718597412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065171718597412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065171718597412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026569366455078

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002251148223877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002251148223877

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022828578948975

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079488754272461

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079488754272461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037491321563721

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050783157348633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050783157348633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042130947113037

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057816505432129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057816505432129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057816505432129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057816505432129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030031204223633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092816352844238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092816352844238

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034370422363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044348239898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012431144714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031876564025879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050041675567627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044150352478027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '2038' and  office_id= '1' 
 Execution Time:0.0033838748931885

select count(*) as cnt from patient_registration where  patient_registration_id= '2038' and  office_id= '1' 
 Execution Time:0.0033838748931885

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2038' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038440227508545

select count(*) as cnt from patient_registration where  patient_registration_id= '2038' and  office_id= '1' 
 Execution Time:0.0033838748931885

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2038' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038440227508545

select fname,lname,mrdno from patient_registration where  patient_registration_id='2038' and  office_id= '1' 
 Execution Time:0.0033080577850342

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083208084106445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083208084106445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043148994445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043148994445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043148994445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043148994445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043148994445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select count(*) as cnt from patient_registration where  patient_registration_id= '2043' and  office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_registration where  patient_registration_id= '2043' and  office_id= '1' 
 Execution Time:0.00066900253295898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2043' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035591125488281

select count(*) as cnt from patient_registration where  patient_registration_id= '2043' and  office_id= '1' 
 Execution Time:0.00066900253295898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2043' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035591125488281

select fname,lname,mrdno from patient_registration where  patient_registration_id='2043' and  office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001331090927124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001331090927124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001331090927124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001331090927124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037579536437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025007724761963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039858818054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001331090927124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032541751861572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037579536437988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041079521179199

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014429092407227

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014429092407227

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037961006164551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037961006164551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037961006164551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013570785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037961006164551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013570785522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060429573059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.00061607360839844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2049' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031909942626953

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.00061607360839844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2049' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031909942626953

select fname,lname,mrdno from patient_registration where  patient_registration_id='2049' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.012047052383423

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034840106964111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034840106964111

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038931369781494

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.011346817016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039851665496826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039851665496826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028262138366699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039851665496826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028262138366699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027709007263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039851665496826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028262138366699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027709007263184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039851665496826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028262138366699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027709007263184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086188316345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066580772399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095987319946289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036230087280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095987319946289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036230087280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095987319946289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036230087280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015130043029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095987319946289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036230087280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026109218597412

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001054048538208

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057079792022705

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002701997756958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018150806427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038712024688721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034248828887939

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018150806427002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051009654998779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026531219482422

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026531219482422

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.003108024597168

select count(*) as cnt from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0033199787139893

select count(*) as cnt from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0033199787139893

select * from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0038740634918213

select count(*) as cnt from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0033199787139893

select * from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0038740634918213

select * from billing_detail where  billing_master_id= '330' 
 Execution Time:0.0077888965606689

select count(*) as cnt from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0033199787139893

select * from billing_master where  billing_master_id= '330' and  office_id= '1' 
 Execution Time:0.0038740634918213

select * from billing_detail where  billing_master_id= '330' 
 Execution Time:0.0077888965606689

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.0015130043029785

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.0015130043029785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2049' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045139789581299

select count(*) as cnt from patient_registration where  patient_registration_id= '2049' and  office_id= '1' 
 Execution Time:0.0015130043029785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2049' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045139789581299

select fname,lname,mrdno from patient_registration where  patient_registration_id='2049' and  office_id= '1' 
 Execution Time:0.0019340515136719

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045700073242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045700073242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045700073242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045700073242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011489391326904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045700073242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011489391326904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086307525634766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086307525634766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075912475585938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075912475585938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003211498260498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018241405487061

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018241405487061

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091910362243652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091910362243652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027279853820801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027279853820801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044240951538086

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014569759368896

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014569759368896

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041739940643311

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.019155025482178

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.019155025482178

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077700614929199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077700614929199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011529922485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011529922485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011529922485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011529922485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014300346374512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011529922485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014300346374512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079898834228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011289119720459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040590763092041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099396705627441

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099396705627441

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024209022521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0059511661529541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0059511661529541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034599304199219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020489692687988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020489692687988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042629241943359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037839412689209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037839412689209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037839412689209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003734827041626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056440830230713

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037839412689209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003734827041626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056920051574707

select count(*) as cnt from patient_registration where  patient_registration_id= '1874' and  office_id= '1' 
 Execution Time:0.0041098594665527

select count(*) as cnt from patient_registration where  patient_registration_id= '1874' and  office_id= '1' 
 Execution Time:0.0041098594665527

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033600330352783

select count(*) as cnt from patient_registration where  patient_registration_id= '1874' and  office_id= '1' 
 Execution Time:0.0041098594665527

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1874' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033600330352783

select fname,lname,mrdno from patient_registration where  patient_registration_id='1874' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077104568481445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077009201049805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096797943115234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096797943115234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078582763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078582763671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030179023742676

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00052094459533691

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056195259094238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045380592346191

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0067517757415771

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0067517757415771

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016579627990723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016579627990723

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016579627990723

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016579627990723

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016579627990723

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029706954956055

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015110969543457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071308612823486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071308612823486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071308612823486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071308612823486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062799453735352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023648738861084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071308612823486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062799453735352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023648738861084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014297962188721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017030239105225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011990070343018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011990070343018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024158954620361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011990070343018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024158954620361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011990070343018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024158954620361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027589797973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031988620758057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011990070343018

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024158954620361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027589797973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037250518798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037250518798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037250518798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037250518798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017449855804443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038521289825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037250518798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017449855804443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074005126953125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074005126953125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031230449676514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031230449676514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.001209020614624

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.001209020614624

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1597' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037219524383545

select count(*) as cnt from patient_registration where  patient_registration_id= '1597' and  office_id= '1' 
 Execution Time:0.001209020614624

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1597' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037219524383545

select fname,lname,mrdno from patient_registration where  patient_registration_id='1597' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00057482719421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0091969966888428

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 44 
 Execution Time:0.0016779899597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475


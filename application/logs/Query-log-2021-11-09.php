select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038139820098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038139820098877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038139820098877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038139820098877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032479763031006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034887790679932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038139820098877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038101673126221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026588439941406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032479763031006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051250457763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053009986877441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053009986877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053009986877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053009986877441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027179718017578

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-08' and  '2021-11-08' and  billing_master.office_id= 1        
 Execution Time:0.0021929740905762

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-08' and  '2021-11-08' and  billing_master.office_id= 1        
 Execution Time:0.0021929740905762

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-08' and '2021-11-08' and  patient_registration.office_id= 1      
 Execution Time:0.0045909881591797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030717849731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010120868682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010120868682861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050170421600342

select count(*) as cnt from patient_registration where  patient_registration_id= '2249' and  office_id= '1' 
 Execution Time:0.00065994262695312

select count(*) as cnt from patient_registration where  patient_registration_id= '2249' and  office_id= '1' 
 Execution Time:0.00065994262695312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2249' and  doctors_registration.office_id= '1' 
 Execution Time:0.002601146697998

select count(*) as cnt from patient_registration where  patient_registration_id= '2249' and  office_id= '1' 
 Execution Time:0.00065994262695312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2249' and  doctors_registration.office_id= '1' 
 Execution Time:0.002601146697998

select fname,lname,mrdno from patient_registration where  patient_registration_id='2249' and  office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0006258487701416

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0006258487701416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_registration where  patient_registration_id= '2069' and  office_id= '1' 
 Execution Time:0.0006718635559082

select count(*) as cnt from patient_registration where  patient_registration_id= '2069' and  office_id= '1' 
 Execution Time:0.0006718635559082

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2069' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037870407104492

select count(*) as cnt from patient_registration where  patient_registration_id= '2069' and  office_id= '1' 
 Execution Time:0.0006718635559082

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2069' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037870407104492

select fname,lname,mrdno from patient_registration where  patient_registration_id='2069' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067806243896484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048685073852539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026321411132812

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060296058654785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060296058654785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021381378173828

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021381378173828

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036129951477051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093293190002441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0049490928649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093293190002441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0049490928649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093293190002441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0049490928649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013298988342285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093293190002441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0049490928649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013298988342285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005342960357666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051021575927734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051021575927734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045928955078125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00099682807922363

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00099682807922363

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017349720001221

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018661022186279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018661022186279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078659057617188

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041723251342773

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057792663574219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041007995605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002608060836792

select count(*) as cnt from patient_registration where  patient_registration_id= '2231' and  office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from patient_registration where  patient_registration_id= '2231' and  office_id= '1' 
 Execution Time:0.00047087669372559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2231' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021529197692871

select count(*) as cnt from patient_registration where  patient_registration_id= '2231' and  office_id= '1' 
 Execution Time:0.00047087669372559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2231' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021529197692871

select fname,lname,mrdno from patient_registration where  patient_registration_id='2231' and  office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067591667175293

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067591667175293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041239261627197

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041239261627197

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012960433959961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012960433959961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010596990585327

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012960433959961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010596990585327

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012960433959961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010596990585327

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010020732879639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083451271057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005047082901001

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012960433959961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010596990585327

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010020732879639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012355089187622

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023679733276367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023679733276367

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027730464935303

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072193145751953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040111541748047

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00038599967956543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022790431976318

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00038599967956543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022790431976318

select fname,lname,mrdno from patient_registration where  patient_registration_id='1920' and  office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040459632873535

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040459632873535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0061569213867188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0046758651733398

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0046758651733398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031239986419678

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078797340393066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037269592285156

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037269592285156

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037970542907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004127025604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004127025604248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010111331939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004127025604248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010111331939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018720626831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004127025604248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010111331939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018720626831055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018088817596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012798309326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004127025604248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010111331939697

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018720626831055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018088817596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048859119415283

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037651062011719

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037651062011719

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038719177246094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016109943389893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016109943389893

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036551952362061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092482566833496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092482566833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092482566833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028150081634521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088787078857422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092482566833496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045058727264404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from patient_registration where  patient_registration_id= '189' and  office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from patient_registration where  patient_registration_id= '189' and  office_id= '1' 
 Execution Time:0.00073909759521484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='189' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039989948272705

select count(*) as cnt from patient_registration where  patient_registration_id= '189' and  office_id= '1' 
 Execution Time:0.00073909759521484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='189' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039989948272705

select fname,lname,mrdno from patient_registration where  patient_registration_id='189' and  office_id= '1' 
 Execution Time:0.00031781196594238

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00027894973754883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039710998535156

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00027894973754883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039710998535156

select fname,lname,mrdno from patient_registration where  patient_registration_id='1920' and  office_id= '1' 
 Execution Time:0.0010049343109131

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023510456085205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023510456085205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050148963928223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094199180603027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094199180603027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024819374084473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033199787139893

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011720657348633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011720657348633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092005729675293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029499530792236

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029499530792236

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012931823730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098059177398682

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057411193847656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057411193847656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00017786026000977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029051303863525

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011470317840576

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011470317840576

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046181678771973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046181678771973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0083889961242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039577484130859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039577484130859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047681331634521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047681331634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047681331634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047681331634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047681331634521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.00032186508178711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2296' and  doctors_registration.office_id= '1' 
 Execution Time:0.002208948135376

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.00032186508178711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2296' and  doctors_registration.office_id= '1' 
 Execution Time:0.002208948135376

select fname,lname,mrdno from patient_registration where  patient_registration_id='2296' and  office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029067993164062

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029067993164062

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00079894065856934

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053219795227051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053219795227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053219795227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053219795227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053219795227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012500286102295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012500286102295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045042037963867

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.00053906440734863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1697' and  doctors_registration.office_id= '1' 
 Execution Time:0.002377986907959

select count(*) as cnt from patient_registration where  patient_registration_id= '1697' and  office_id= '1' 
 Execution Time:0.00053906440734863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1697' and  doctors_registration.office_id= '1' 
 Execution Time:0.002377986907959

select fname,lname,mrdno from patient_registration where  patient_registration_id='1697' and  office_id= '1' 
 Execution Time:0.0010008811950684

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019299983978271

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019299983978271

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020551681518555

select count(*) as cnt from patient_registration where  patient_registration_id= '125' and  office_id= '1' 
 Execution Time:0.00064587593078613

select count(*) as cnt from patient_registration where  patient_registration_id= '125' and  office_id= '1' 
 Execution Time:0.00064587593078613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='125' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '125' and  office_id= '1' 
 Execution Time:0.00064587593078613

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='125' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038599967956543

select fname,lname,mrdno from patient_registration where  patient_registration_id='125' and  office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052785873413086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039699077606201

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039699077606201

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022671222686768

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015349388122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006633996963501

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006633996963501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081930160522461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035209655761719

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006633996963501

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030841827392578

select count(*) as cnt from patient_registration where  patient_registration_id= '2308' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '2308' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2308' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021190643310547

select count(*) as cnt from patient_registration where  patient_registration_id= '2308' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2308' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021190643310547

select fname,lname,mrdno from patient_registration where  patient_registration_id='2308' and  office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088691711425781

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0012791156768799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056219100952148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056219100952148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056219100952148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056219100952148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043439865112305

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090885162353516

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090885162353516

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017099380493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017099380493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081088542938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069618225097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045769214630127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003087043762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012782096862793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012782096862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012782096862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002586841583252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012782096862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002586841583252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012782096862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002586841583252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035338401794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035338401794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035338401794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035338401794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014050006866455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016238689422607

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010771751403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035338401794434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014050006866455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037078857421875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00506591796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00506591796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00506591796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00506591796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00506591796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.012116193771362

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.012116193771362

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0057508945465088

select count(*) as cnt from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0018320083618164

select count(*) as cnt from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0018320083618164

select * from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0070791244506836

select count(*) as cnt from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0018320083618164

select * from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0070791244506836

select * from billing_detail where  billing_master_id= '364' 
 Execution Time:0.0034201145172119

select count(*) as cnt from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0018320083618164

select * from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0070791244506836

select * from billing_detail where  billing_master_id= '364' 
 Execution Time:0.0034201145172119

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.003413200378418

select count(*) as cnt from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0018320083618164

select * from billing_master where  billing_master_id= '364' and  office_id= '1' 
 Execution Time:0.0070791244506836

select * from billing_detail where  billing_master_id= '364' 
 Execution Time:0.0034201145172119

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.003413200378418

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0038890838623047

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.0027570724487305

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.0027570724487305

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2296' and  doctors_registration.office_id= '1' 
 Execution Time:0.004457950592041

select count(*) as cnt from patient_registration where  patient_registration_id= '2296' and  office_id= '1' 
 Execution Time:0.0027570724487305

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2296' and  doctors_registration.office_id= '1' 
 Execution Time:0.004457950592041

select fname,lname,mrdno from patient_registration where  patient_registration_id='2296' and  office_id= '1' 
 Execution Time:0.0035319328308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006749153137207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006749153137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006749153137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006749153137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006749153137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019528865814209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029830932617188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024220943450928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024220943450928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024220943450928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029888153076172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.021198034286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093228816986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024220943450928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029888153076172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062699317932129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0067329406738281

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0067329406738281

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001270055770874

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011990070343018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011990070343018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014359951019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044050216674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052049160003662

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00081110000610352

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00081110000610352

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.005202054977417

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015711784362793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015711784362793

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013453006744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013453006744385

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013453006744385

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013453006744385

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.013453006744385

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082206726074219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082206726074219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039510726928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039510726928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065748691558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039510726928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065748691558838

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077128410339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036900043487549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039510726928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065748691558838

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077128410339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061941146850586

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002269983291626

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071978569030762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071978569030762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071978569030762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045280456542969

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.058840990066528

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.058840990066528

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036659240722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003899097442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003899097442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003899097442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003899097442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032460689544678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023951530456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034389495849609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003899097442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032460689544678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008281946182251

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083589553833008

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083589553833008

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031929016113281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027010440826416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027010440826416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012931823730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004645824432373

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.0037500858306885

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.0037500858306885

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='686' and  doctors_registration.office_id= '1' 
 Execution Time:0.004586935043335

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.0037500858306885

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='686' and  doctors_registration.office_id= '1' 
 Execution Time:0.004586935043335

select fname,lname,mrdno from patient_registration where  patient_registration_id='686' and  office_id= '1' 
 Execution Time:0.0016589164733887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060582160949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060582160949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060582160949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060582160949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060582160949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044150352478027

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037379264831543

select count(*) as cnt from patient_registration where  patient_registration_id= '56' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='56' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037379264831543

select fname,lname,mrdno from patient_registration where  patient_registration_id='56' and  office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0069990158081055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0069990158081055

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0090858936309814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083017349243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083017349243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044829845428467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002985954284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002985954284668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046849250793457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035459995269775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035459995269775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040159225463867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035459995269775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040159225463867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035459995269775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040159225463867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020768642425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049641132354736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035459995269775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040159225463867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020768642425537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046899318695068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031590461730957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004396915435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052714347839355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005375862121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052714347839355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005375862121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055029392242432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052714347839355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005375862121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055029392242432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011279821395874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052714347839355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.005375862121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055029392242432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011279821395874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012430906295776

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052230358123779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085616111755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030889511108398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011498928070068

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085616111755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024209022521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024209022521973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024209022521973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017988681793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024209022521973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017988681793213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037641525268555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024209022521973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017988681793213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037641525268555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045099258422852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028069019317627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028069019317627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028069019317627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028069019317627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020909309387207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028069019317627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037820339202881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069839954376221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034611225128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030238628387451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030238628387451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030238628387451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027801990509033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030238628387451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027801990509033

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020308494567871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030238628387451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027801990509033

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032958984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013561248779297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009458065032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009458065032959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078051090240479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092411041259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047130584716797

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050549507141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095582008361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095582008361816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095582008361816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095582008361816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012578964233398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095582008361816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012578964233398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098991394042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098991394042969

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098991394042969

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098991394042969

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098991394042969

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00553297996521

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060510635375977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056698322296143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055828094482422

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.011340856552124

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070462226867676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035750865936279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035750865936279

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040009021759033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027849674224854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027849674224854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0081439018249512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027849674224854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0081439018249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027849674224854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0081439018249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.01540207862854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039701461791992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077941417694092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027849674224854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0081439018249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003774881362915

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055499076843262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018250942230225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018250942230225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018250942230225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019481182098389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018250942230225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019481182098389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003242015838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018250942230225

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019481182098389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003242015838623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047531127929688

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00068306922912598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.003803014755249

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00068306922912598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.003803014755249

select fname,lname,mrdno from patient_registration where  patient_registration_id='1911' and  office_id= '1' 
 Execution Time:0.0020179748535156

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007331371307373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0019669532775879

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0019669532775879

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0069520473480225

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022439956665039

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022439956665039

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0027120113372803

select count(*) as cnt from patient_registration where  patient_registration_id= '1391' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '1391' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1391' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038659572601318

select count(*) as cnt from patient_registration where  patient_registration_id= '1391' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1391' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038659572601318

select fname,lname,mrdno from patient_registration where  patient_registration_id='1391' and  office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021529197692871

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073814392089844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073814392089844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012691020965576

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012691020965576

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001471996307373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083708763122559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083708763122559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081396102905273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055279731750488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00077199935913086

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00077199935913086

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059986114501953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010650157928467

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003199577331543

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074291229248047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046768188476562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035400390625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035400390625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038449764251709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086617469787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086617469787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086617469787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060198307037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086617469787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060198307037354

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037500858306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077741146087646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086617469787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060198307037354

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037500858306885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0069980621337891

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0069980621337891

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0068459510803223

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0060150623321533

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0060150623321533

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0038189888000488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025069713592529

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025069713592529

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037381649017334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037381649017334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037381649017334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037381649017334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036411285400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002875804901123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037381649017334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036411285400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077559947967529

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.0074188709259033

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.0074188709259033

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='404' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090420246124268

select count(*) as cnt from patient_registration where  patient_registration_id= '404' and  office_id= '1' 
 Execution Time:0.0074188709259033

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='404' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090420246124268

select fname,lname,mrdno from patient_registration where  patient_registration_id='404' and  office_id= '1' 
 Execution Time:0.0037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046939849853516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046939849853516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006648063659668

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011610984802246

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011610984802246

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020380020141602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.005612850189209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.005612850189209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027480125427246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032069683074951

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032069683074951

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018301010131836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012336015701294

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016188621520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077030658721924

select count(*) as cnt from patient_registration where  patient_registration_id= '1703' and  office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '1703' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1703' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025870800018311

select count(*) as cnt from patient_registration where  patient_registration_id= '1703' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1703' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025870800018311

select fname,lname,mrdno from patient_registration where  patient_registration_id='1703' and  office_id= '1' 
 Execution Time:0.00023794174194336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067687034606934

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067687034606934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007789134979248

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007789134979248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072479248046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015668869018555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072479248046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045990943908691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031728744506836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037767887115479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031728744506836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070919990539551

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001331090927124

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001331090927124

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019631385803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019631385803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019631385803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019631385803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019381046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015969276428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019631385803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019381046295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012362003326416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072100162506104

select count(*) as cnt from patient_registration where  patient_registration_id= '1977' and  office_id= '1' 
 Execution Time:0.00068783760070801

select count(*) as cnt from patient_registration where  patient_registration_id= '1977' and  office_id= '1' 
 Execution Time:0.00068783760070801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1977' and  doctors_registration.office_id= '1' 
 Execution Time:0.004371166229248

select count(*) as cnt from patient_registration where  patient_registration_id= '1977' and  office_id= '1' 
 Execution Time:0.00068783760070801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1977' and  doctors_registration.office_id= '1' 
 Execution Time:0.004371166229248

select fname,lname,mrdno from patient_registration where  patient_registration_id='1977' and  office_id= '1' 
 Execution Time:0.00042009353637695


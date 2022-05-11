select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025300979614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018529891967773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025300979614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018529891967773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021059513092041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025300979614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018529891967773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021059513092041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 46 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.010951995849609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024549961090088

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024549961090088

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-14' and  '2021-11-14' and  billing_master.office_id= 1        
 Execution Time:0.0011827945709229

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-14' and  '2021-11-14' and  billing_master.office_id= 1        
 Execution Time:0.0011827945709229

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-14' and '2021-11-14' and  patient_registration.office_id= 1      
 Execution Time:0.0040311813354492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022721290588379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060420036315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022721290588379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085020065307617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085020065307617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033800601959229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033800601959229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033800601959229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046870708465576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033800601959229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046870708465576

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041418075561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033800601959229

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022521018981934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046870708465576

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041418075561523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006209135055542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069284439086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048701763153076

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001133918762207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001133918762207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022139549255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022139549255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070405006408691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010807037353516

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011598110198975

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0015499591827393

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0015499591827393

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.010674953460693

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040984153747559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006397008895874

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059669017791748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081419944763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081419944763184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047039985656738

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079202651977539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00059390068054199

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011961460113525

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011961460113525

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047152042388916

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090193748474121

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029430389404297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045020580291748

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052309036254883

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049729347229004

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0041258335113525

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0041258335113525

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047521591186523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026941299438477

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026941299438477

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040009021759033

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040009021759033

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038211345672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047988891601562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060391426086426

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053787231445312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053787231445312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053787231445312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053787231445312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007331371307373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043039321899414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090479850769043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090479850769043

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014469623565674

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014469623565674

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080728530883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030732154846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030732154846191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014810562133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016038417816162

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022828578948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030732154846191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014810562133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049328804016113

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023200511932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023200511932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003781795501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041470527648926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035421848297119

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015699863433838

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003781795501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069329738616943

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084710121154785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084710121154785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003521203994751

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003521203994751

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010139942169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065209865570068

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00090813636779785

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00090813636779785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1808' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040750503540039

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00090813636779785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1808' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040750503540039

select fname,lname,mrdno from patient_registration where  patient_registration_id='1808' and  office_id= '1' 
 Execution Time:0.0040009021759033

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024161338806152

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024161338806152

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038349628448486

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062298774719238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083804130554199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083804130554199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0065338611602783

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0065338611602783

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038430690765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062291622161865

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070595741271973

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030388832092285

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007479190826416

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007479190826416

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039069652557373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039069652557373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031380653381348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055217742919922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001723051071167

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001723051071167

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014739036560059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001723051071167

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014739036560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001723051071167

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014739036560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036411285400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001723051071167

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014739036560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069904327392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048229694366455

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041103363037109

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052595138549805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029778480529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074291229248047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041759014129639

select count(*) as cnt from patient_registration where  patient_registration_id= '1433' and  office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_registration where  patient_registration_id= '1433' and  office_id= '1' 
 Execution Time:0.00043296813964844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037660598754883

select count(*) as cnt from patient_registration where  patient_registration_id= '1433' and  office_id= '1' 
 Execution Time:0.00043296813964844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037660598754883

select fname,lname,mrdno from patient_registration where  patient_registration_id='1433' and  office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004417896270752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004417896270752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038909912109375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011239051818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011239051818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011239051818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011239051818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010271072387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042519569396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011239051818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010271072387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073189735412598

select count(*) as cnt from patient_registration where  patient_registration_id= '1985' and  office_id= '1' 
 Execution Time:0.0033059120178223

select count(*) as cnt from patient_registration where  patient_registration_id= '1985' and  office_id= '1' 
 Execution Time:0.0033059120178223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1985' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '1985' and  office_id= '1' 
 Execution Time:0.0033059120178223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1985' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046300888061523

select fname,lname,mrdno from patient_registration where  patient_registration_id='1985' and  office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00099992752075195

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00099992752075195

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '2318' and  office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_registration where  patient_registration_id= '2318' and  office_id= '1' 
 Execution Time:0.00066900253295898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2318' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041141510009766

select count(*) as cnt from patient_registration where  patient_registration_id= '2318' and  office_id= '1' 
 Execution Time:0.00066900253295898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2318' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041141510009766

select fname,lname,mrdno from patient_registration where  patient_registration_id='2318' and  office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015881061553955

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015881061553955

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038762092590332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019321441650391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019321441650391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023350715637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023350715637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013551712036133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091290473937988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023350715637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097799301147461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097799301147461

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022461414337158

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022461414337158

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017709732055664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012099742889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012099742889404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012099742889404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00337815284729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012099742889404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00337815284729

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014481544494629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025317668914795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012099742889404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00337815284729

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010111331939697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062611103057861

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select count(*) as cnt from patient_registration where  patient_registration_id= '2508' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_registration where  patient_registration_id= '2508' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2508' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055539608001709

select count(*) as cnt from patient_registration where  patient_registration_id= '2508' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2508' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055539608001709

select fname,lname,mrdno from patient_registration where  patient_registration_id='2508' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032711029052734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032711029052734

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018689632415771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029819011688232

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029819011688232

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034618377685547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034618377685547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034618377685547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034618377685547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050327777862549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015230178833008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015230178833008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015230178833008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014579296112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014300346374512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015230178833008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014579296112061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043599605560303

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069713592529297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069713592529297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045969486236572

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005638599395752

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005638599395752

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040349960327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040349960327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040349960327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040349960327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037558078765869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040349960327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037558078765869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010735988616943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060892105102539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060892105102539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060892105102539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060892105102539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040268898010254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023751258850098

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023751258850098

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038778781890869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0098440647125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0098440647125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0098440647125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0098440647125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088381767272949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0098440647125244

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088381767272949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041899681091309

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041899681091309

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074386596679688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074386596679688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014729499816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014729499816895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054168701171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025839805603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025839805603027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025839805603027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025839805603027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002608060836792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010443925857544

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026671886444092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025839805603027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002608060836792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065493583679199

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060510635375977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032649040222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011301040649414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011301040649414

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017399787902832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017399787902832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034620761871338

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.003817081451416

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009310245513916

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073885917663574

select count(*) as cnt from medicine_category where  name = 'EYE DROPS' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from medicine_category where  name = 'TABLET' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from medicine_category where  name = 'OINTMENT' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from medicine_category where  name = 'OTHERS' and office_id= '1' 
 Execution Time:0.00053906440734863

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00496506690979

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from medicine_instruction where  name = '4 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00054311752319336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from medicine where  name = 'LUBIFRESH' and office_id= '1' 
 Execution Time:0.00046801567077637

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0045609474182129

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030670166015625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0030670166015625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014030933380127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052459239959717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029160976409912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008997917175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017189979553223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017189979553223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018131732940674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018131732940674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018131732940674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018131732940674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042150020599365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018131732940674

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003777027130127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064020156860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064020156860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018901824951172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064020156860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018901824951172

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027661323547363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064020156860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018901824951172

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027661323547363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064020156860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018901824951172

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027661323547363

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select count(*) as cnt from medicine_instruction where  name = '6 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '2520' and  office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_registration where  patient_registration_id= '2520' and  office_id= '1' 
 Execution Time:0.00037813186645508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2520' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040018558502197

select count(*) as cnt from patient_registration where  patient_registration_id= '2520' and  office_id= '1' 
 Execution Time:0.00037813186645508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2520' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040018558502197

select fname,lname,mrdno from patient_registration where  patient_registration_id='2520' and  office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027201175689697

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027201175689697

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047516822814941

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0006251335144043

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from medicine_instruction where  name = '2 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00086188316345215

select count(*) as cnt from medicine_instruction where  name = '1-0-1' and office_id= '1' 
 Execution Time:0.00036406517028809

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from medicine where  name = 'LIMCY' and office_id= '1' 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007072925567627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007072925567627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007072925567627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0021419525146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005950927734375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074386596679688

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056886672973633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045571327209473

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003809928894043

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004906177520752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011961460113525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028438568115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052452087402344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052452087402344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052452087402344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052452087402344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052452087402344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0042538642883301

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0042538642883301

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2516' and  doctors_registration.office_id= '1' 
 Execution Time:0.014126062393188

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0042538642883301

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2516' and  doctors_registration.office_id= '1' 
 Execution Time:0.014126062393188

select fname,lname,mrdno from patient_registration where  patient_registration_id='2516' and  office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0038950443267822

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00046181678771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052180290222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052180290222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052180290222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052180290222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052180290222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046761035919189

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010228157043457

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010228157043457

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021460056304932

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021460056304932

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049469470977783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011353015899658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00080084800720215

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00080084800720215

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017020702362061

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017020702362061

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012450218200684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013389587402344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011311054229736

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013389587402344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088200569152832

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058197975158691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006260871887207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006260871887207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037600994110107

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039269924163818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036449432373047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005122184753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005234956741333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067615509033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049731731414795

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024878978729248

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024878978729248

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038280487060547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004878044128418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004878044128418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011081695556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043082237243652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043082237243652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039899349212646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026729106903076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053329467773438

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028560161590576

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010751962661743

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.010751962661743

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0074620246887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035021305084229

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045709609985352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0074620246887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010087013244629

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045959949493408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019299983978271

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019299983978271

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019299983978271

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00092101097106934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063610076904297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053949356079102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051000118255615

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051000118255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051000118255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051000118255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-15' and  '2021-11-15' and  billing_master.office_id= 1        
 Execution Time:0.0013899803161621

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-15' and  '2021-11-15' and  billing_master.office_id= 1        
 Execution Time:0.0013899803161621

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-15' and '2021-11-15' and  patient_registration.office_id= 1      
 Execution Time:0.0050492286682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015478134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015478134155273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015478134155273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00072193145751953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021319389343262

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010130405426025

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0030529499053955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048098564147949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048098564147949

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048098564147949

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011870861053467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011870861053467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011870861053467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011870861053467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013599395751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014791488647461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011870861053467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013599395751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00089097023010254

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00089097023010254

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003511905670166

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036180019378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036180019378662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038549900054932

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002575159072876

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002575159072876

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002575159072876

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.002295970916748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001025915145874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047683715820312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047683715820312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047683715820312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047683715820312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.028907775878906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.028907775878906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003978967666626

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.028907775878906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029480457305908

select count(*) as cnt from patient_registration where  patient_registration_id= '48' and  office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '48' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='48' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_registration where  patient_registration_id= '48' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='48' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056004524230957

select fname,lname,mrdno from patient_registration where  patient_registration_id='48' and  office_id= '1' 
 Execution Time:0.00031185150146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062851905822754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062851905822754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062851905822754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062851905822754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010011196136475

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010011196136475

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010011196136475

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00064206123352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00056910514831543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052440166473389

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00057315826416016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541


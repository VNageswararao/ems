select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072221755981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072221755981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072221755981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072221755981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024831295013428

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-03' and  '2022-01-03' and  billing_master.office_id= 1        
 Execution Time:0.0010919570922852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002349853515625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024280548095703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024280548095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032360553741455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024280548095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00090384483337402

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00090384483337402

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0050170421600342

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0050170421600342

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0017368793487549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036468505859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036468505859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010561943054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028242826461792

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033967971801758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0078001022338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010196924209595

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.018546104431152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036468505859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010561943054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0072951316833496

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0029940605163574

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0029940605163574

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079188346862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079188346862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0104079246521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079188346862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0104079246521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050959587097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079188346862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0104079246521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050959587097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020906925201416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014037132263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.01302695274353

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062229633331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079188346862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0104079246521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050959587097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.020906925201416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011476039886475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00047206878662109

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.01246190071106

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.01246190071106

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0011749267578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010628700256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010628700256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010628700256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00033807754516602

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061798095703125

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012481212615967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004570484161377

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0011699199676514

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0011699199676514

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00085186958312988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017380714416504

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039100646972656

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029516220092773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029516220092773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065112113952637

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00067281723022461

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00067281723022461

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014958381652832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00075006484985352

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00075006484985352

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090694427490234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016341209411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090694427490234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select * from office where  office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058984756469727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058984756469727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035691261291504

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0011579990386963

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0011579990386963

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0021820068359375

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0021820068359375

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027894973754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027894973754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031781196594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00085616111755371

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00085616111755371

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00022983551025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00022983551025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='129' and  office_id= '1' 
 Execution Time:0.00062990188598633

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='129' and  office_id= '1' 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0015509128570557

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0015509128570557

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0040690898895264

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027880668640137

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027880668640137

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0016028881072998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0016028881072998

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0042998790740967

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0012340545654297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0012340545654297

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0081110000610352

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0012540817260742

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0012540817260742

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0040621757507324

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7   
 Execution Time:0.0036630630493164

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7   
 Execution Time:0.0036630630493164

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0021510124206543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6   
 Execution Time:0.0019772052764893

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0036048889160156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0027468204498291

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=5  and billing_detail.charge_id=2  
 Execution Time:0.0016028881072998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=5  and billing_detail.charge_id=2  
 Execution Time:0.0016028881072998

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0035209655761719

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.001816987991333

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.001816987991333

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0033187866210938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.001816987991333

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0033187866210938

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005638599395752

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=2  
 Execution Time:0.0017759799957275

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=2  
 Execution Time:0.0017759799957275

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0029590129852295

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024318695068359

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=5  
 Execution Time:0.0011899471282959

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-31' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=5  
 Execution Time:0.0011899471282959

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2021-08-31' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0033540725708008

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060510635375977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060510635375977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.00063991546630859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.00063991546630859

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0011041164398193

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012860298156738

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012860298156738

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0012178421020508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=5  
 Execution Time:0.001140832901001

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=5  
 Execution Time:0.001140832901001

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0018038749694824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=2  
 Execution Time:0.0011849403381348

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=2  
 Execution Time:0.0011849403381348

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.001276969909668

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.0011239051818848

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.0011239051818848

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0011179447174072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031805038452148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00043296813964844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00026917457580566

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095677375793457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095677375793457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083589553833008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083589553833008

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00043177604675293

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00043177604675293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014770030975342

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014770030975342

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00072598457336426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00084710121154785

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00084710121154785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00040006637573242

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0018720626831055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0018720626831055

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0027980804443359

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=1  
 Execution Time:0.0012907981872559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=1  
 Execution Time:0.0012907981872559

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0015320777893066

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=9  and billing_detail.charge_id=1  
 Execution Time:0.0018520355224609

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=9  and billing_detail.charge_id=1  
 Execution Time:0.0018520355224609

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1         and  patient_appointment.appointment_opd_charge_id=9 
 Execution Time:0.0020980834960938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=11  and billing_detail.charge_id=1  
 Execution Time:0.0018119812011719

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=11  and billing_detail.charge_id=1  
 Execution Time:0.0018119812011719

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1         and  patient_appointment.appointment_opd_charge_id=11 
 Execution Time:0.0016069412231445

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=14  and billing_detail.charge_id=1  
 Execution Time:0.0012388229370117

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=14  and billing_detail.charge_id=1  
 Execution Time:0.0012388229370117

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1         and  patient_appointment.appointment_opd_charge_id=14 
 Execution Time:0.0011389255523682

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=8  and billing_detail.charge_id=1  
 Execution Time:0.0011699199676514

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=8  and billing_detail.charge_id=1  
 Execution Time:0.0011699199676514

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1         and  patient_appointment.appointment_opd_charge_id=8 
 Execution Time:0.001060962677002

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054478645324707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054478645324707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028705596923828

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.00081491470336914

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=2  
 Execution Time:0.00081491470336914

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0010180473327637

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029489994049072

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029489994049072

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016820430755615

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=1  
 Execution Time:0.00091099739074707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=1  
 Execution Time:0.00091099739074707

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0011250972747803

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00030279159545898

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=4  
 Execution Time:0.0016729831695557

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093793869018555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093793869018555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031280517578125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.00078296661376953

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.00078296661376953

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.00098514556884766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014200210571289

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014200210571289

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050711631774902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.0025260448455811

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0006110668182373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0006110668182373

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0012540817260742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012972354888916

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00047993659973145

select patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069379806518555

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069379806518555

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012068748474121

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069379806518555

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012068748474121

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.0013859272003174

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00027298927307129

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.00073790550231934

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0010361671447754

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-04' and  '2022-01-04' and  billing_master.office_id= 1        
 Execution Time:0.0010361671447754

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1      
 Execution Time:0.0089800357818604

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012459754943848

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012459754943848

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0015089511871338

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012459754943848

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0015089511871338

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1         
 Execution Time:0.0012459754943848

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where appointment_date between  '2022-01-04' and '2022-01-04' and  patient_registration.office_id= 1        
 Execution Time:0.0015089511871338

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.0011248588562012

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=4  
 Execution Time:0.001068115234375

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=4  
 Execution Time:0.001068115234375

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1        and billing_detail.charge_id=4  
 Execution Time:0.001068115234375

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00020194053649902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=4  
 Execution Time:0.0018601417541504

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=6  and billing_detail.charge_id=4  
 Execution Time:0.0018601417541504

select * from injection where  injection_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=4  
 Execution Time:0.0012731552124023

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-01-04' and '2022-01-04' and  billing_master.office_id= 1       and billing_detail.particulars_id=7  and billing_detail.charge_id=4  
 Execution Time:0.0012731552124023

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014240741729736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0036830902099609

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0036830902099609

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0029540061950684

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0060930252075195

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0060930252075195

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0037200450897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043468475341797

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='130' and  office_id= '1' 
 Execution Time:0.00055813789367676

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='129' and  office_id= '1' 
 Execution Time:0.00048708915710449

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='128' and  office_id= '1' 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021650791168213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021650791168213

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021650791168213

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711


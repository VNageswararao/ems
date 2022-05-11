select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051620006561279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051620006561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051620006561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002467155456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051620006561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002467155456543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0096900463104248

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-27' and  '2021-10-27' and  billing_master.office_id= 1        
 Execution Time:0.0077779293060303

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-27' and  '2021-10-27' and  billing_master.office_id= 1        
 Execution Time:0.0077779293060303

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-27' and '2021-10-27' and  patient_registration.office_id= 1      
 Execution Time:0.029922008514404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011754035949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011754035949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.06992506980896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011754035949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.06992506980896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0076961517333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011754035949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.06992506980896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0076961517333984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.071048974990845

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.063544034957886

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.052667140960693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011754035949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.06992506980896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0076961517333984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.071048974990845

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083968639373779

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0036849975585938

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0036849975585938

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00506591796875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039219856262207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084781646728516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025849342346191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039770603179932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039770603179932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039770603179932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037529468536377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039770603179932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037529468536377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032641887664795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078210830688477

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039770603179932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037529468536377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032641887664795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01032280921936

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0085239410400391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0085239410400391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025551319122314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061988830566406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061988830566406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061988830566406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017800331115723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061988830566406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086188316345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00082206726074219

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00082206726074219

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038385391235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038385391235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038385391235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038385391235352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027718544006348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017030239105225

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017030239105225

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034899711608887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090639591217041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048320293426514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034899711608887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094058513641357

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0016560554504395

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0016560554504395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027179718017578

select count(*) as cnt from patient_registration where  patient_registration_id= '1768' and  office_id= '1' 
 Execution Time:0.0016560554504395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1768' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027179718017578

select fname,lname,mrdno from patient_registration where  patient_registration_id='1768' and  office_id= '1' 
 Execution Time:0.0018250942230225

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044119358062744

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044119358062744

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037178993225098

select count(*) as cnt from patient_registration where  patient_registration_id= '1682' and  office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_registration where  patient_registration_id= '1682' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030660629272461

select count(*) as cnt from patient_registration where  patient_registration_id= '1682' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030660629272461

select fname,lname,mrdno from patient_registration where  patient_registration_id='1682' and  office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057578086853027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057578086853027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054216384887695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054216384887695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018630027770996

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018630027770996

select fname,lname,mrdno from patient_registration where  patient_registration_id='1714' and  office_id= '1' 
 Execution Time:0.00099897384643555

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0082850456237793

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0082850456237793

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042915344238281

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042080879211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042080879211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042080879211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042080879211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088000297546387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042030811309814

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0008080005645752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039219856262207

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0008080005645752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039219856262207

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0011119842529297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014960765838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014960765838623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014960765838623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014960765838623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.02274489402771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0053720474243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014960765838623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035240650177002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037407875061035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.02274489402771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087230205535889

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034298896789551

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034298896789551

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073814392089844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073814392089844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062084197998047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043351650238037

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064396858215332

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0013279914855957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040421485900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040421485900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040421485900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035948753356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040421485900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035948753356934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033049583435059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089409351348877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040421485900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035948753356934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033049583435059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079820156097412

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001399040222168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001399040222168

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0062148571014404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033681392669678

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033681392669678

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003687858581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010549783706665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010549783706665

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010549783706665

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058870315551758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010549783706665

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058870315551758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066568851470947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.027659893035889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010549783706665

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058870315551758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066568851470947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018100738525391

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018100738525391

select fname,lname,mrdno from patient_registration where  patient_registration_id='1595' and  office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043010711669922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018510818481445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018510818481445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017728805541992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017728805541992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041089057922363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010039806365967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010039806365967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010039806365967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010039806365967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084686279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043630599975586

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.0023899078369141

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.0023899078369141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1361' and  doctors_registration.office_id= '1' 
 Execution Time:0.013059854507446

select count(*) as cnt from patient_registration where  patient_registration_id= '1361' and  office_id= '1' 
 Execution Time:0.0023899078369141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1361' and  doctors_registration.office_id= '1' 
 Execution Time:0.013059854507446

select fname,lname,mrdno from patient_registration where  patient_registration_id='1361' and  office_id= '1' 
 Execution Time:0.011689901351929

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070095062255859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038738250732422

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038738250732422

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028810501098633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034592151641846

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054981708526611

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054981708526611

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021860599517822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078110694885254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078110694885254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078110694885254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078110694885254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0073328018188477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029098987579346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0081770420074463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078110694885254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0073328018188477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072810649871826

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010049343109131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010049343109131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010049343109131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010049343109131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010998249053955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013370513916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010049343109131

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010998249053955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004918098449707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074100494384766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074100494384766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092482566833496

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092482566833496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.012055158615112

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.012055158615112

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.012055158615112

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.012055158615112

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012369155883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.012055158615112

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012369155883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select count(*) as cnt from patient_registration where  patient_registration_id= '954' and  office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_registration where  patient_registration_id= '954' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='954' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035269260406494

select count(*) as cnt from patient_registration where  patient_registration_id= '954' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='954' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035269260406494

select fname,lname,mrdno from patient_registration where  patient_registration_id='954' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005638599395752

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005638599395752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0019829273223877

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0019829273223877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032839775085449

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0019829273223877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032839775085449

select fname,lname,mrdno from patient_registration where  patient_registration_id='1646' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00093317031860352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00093317031860352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.02020788192749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.02020788192749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073659420013428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.02020788192749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073659420013428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.02020788192749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073659420013428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.018789768218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014819145202637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013975143432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0097930431365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.02020788192749

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073659420013428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.018789768218994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085110664367676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018699169158936

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018699169158936

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037810802459717

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020971298217773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020971298217773

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036270618438721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036270618438721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036270618438721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036270618438721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041749477386475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094559192657471

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011478185653687

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036270618438721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034501552581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041749477386475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052289962768555

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0073831081390381

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0073831081390381

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027761459350586

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013289451599121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013289451599121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020160675048828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065207481384277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065207481384277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065207481384277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015950202941895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028729438781738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065207481384277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015950202941895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034379959106445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040149688720703

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040149688720703

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035889148712158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035889148712158

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040421485900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039699077606201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039699077606201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039699077606201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040180683135986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039699077606201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040180683135986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058310031890869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021798610687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039699077606201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040180683135986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058310031890869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045640468597412

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001107931137085

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001107931137085

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097990036010742

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097990036010742

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047850608825684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047850608825684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034048557281494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047850608825684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034048557281494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047850608825684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034048557281494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039818286895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041642189025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047850608825684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034048557281494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039818286895752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084700584411621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071289539337158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071289539337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027539730072021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071289539337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027539730072021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.032968044281006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071289539337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027539730072021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.032968044281006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071289539337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027539730072021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.032968044281006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.022778034210205

select count(*) as cnt from patient_registration where  patient_registration_id= '1936' and  office_id= '1' 
 Execution Time:0.0005948543548584

select count(*) as cnt from patient_registration where  patient_registration_id= '1936' and  office_id= '1' 
 Execution Time:0.0005948543548584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034890174865723

select count(*) as cnt from patient_registration where  patient_registration_id= '1936' and  office_id= '1' 
 Execution Time:0.0005948543548584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034890174865723

select fname,lname,mrdno from patient_registration where  patient_registration_id='1936' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003230094909668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003230094909668

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041484832763672

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010750293731689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043580532073975

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079894065856934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079894065856934

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034720897674561

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013291835784912

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013291835784912

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003183126449585

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0084390640258789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0084390640258789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003242015838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032498836517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032498836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032498836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032498836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067968368530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002406120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032498836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067968368530273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064389705657959

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0038590431213379

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0038590431213379

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0037729740142822

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004525899887085

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004525899887085

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0065000057220459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033721923828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033721923828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010906934738159

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043709278106689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033721923828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010906934738159

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010956048965454

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00042915344238281

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017058849334717

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00042915344238281

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017058849334717

select fname,lname,mrdno from patient_registration where  patient_registration_id='1103' and  office_id= '1' 
 Execution Time:0.00017809867858887

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00081205368041992

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013880729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072193145751953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039401054382324

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039401054382324

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010318756103516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086879730224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086879730224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071089267730713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086879730224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071089267730713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086879730224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071089267730713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0068671703338623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0098481178283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0086879730224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071089267730713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0068671703338623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01841402053833

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012731552124023

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012731552124023

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0023291110992432

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050320625305176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050320625305176

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026009082794189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047340393066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047340393066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037591457366943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047340393066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037591457366943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047340393066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037591457366943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001708984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087370872497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047340393066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037591457366943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001708984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068092346191406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068092346191406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039360523223877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039360523223877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025219917297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00376296043396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00376296043396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00376296043396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00376296043396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011039018630981

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074710845947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00376296043396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038049221038818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00844407081604

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004727840423584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004727840423584

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027849674224854

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.015296936035156

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.015296936035156

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0087049007415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096230506896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096230506896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096230506896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074810981750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096230506896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074810981750488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076630115509033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013182163238525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059421062469482

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0096230506896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074810981750488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076630115509033

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010499000549316

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0012519359588623

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0012519359588623

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00086092948913574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035469532012939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035469532012939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047690868377686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035469532012939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047690868377686

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032899379730225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004749059677124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035469532012939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047690868377686

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013790130615234

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013790130615234

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041859149932861

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041859149932861

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0056679248809814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037710666656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037710666656494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037710666656494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037710666656494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037438869476318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040168762207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057690143585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037710666656494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037438869476318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084919929504395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044140815734863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044140815734863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028431415557861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010530948638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010530948638916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010530948638916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026748180389404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010530948638916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026748180389404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056829452514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045328140258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010530948638916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026748180389404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056829452514648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.021141052246094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012280941009521

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012280941009521

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0056610107421875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071780681610107

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071780681610107

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017540454864502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041120052337646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041120052337646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041120052337646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0099689960479736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041120052337646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0099689960479736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019831657409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013085126876831

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068538188934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0067760944366455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041120052337646

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0099689960479736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019831657409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.035294055938721

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0060551166534424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0060551166534424

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041000843048096

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035569667816162

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035569667816162

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031459331512451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023899078369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023899078369141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023899078369141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062010288238525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023899078369141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062010288238525

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003633975982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044598579406738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023899078369141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062010288238525

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003633975982666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095500946044922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022580623626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022580623626709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037357807159424

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026850700378418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026850700378418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021121501922607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038180351257324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038180351257324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00472092628479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038180351257324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00472092628479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037310123443604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.027991056442261

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074670314788818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038180351257324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00472092628479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037310123443604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0031859874725342

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0031859874725342

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0038609504699707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079083442687988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079083442687988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084304809570312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084304809570312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084304809570312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084304809570312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00075387954711914

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00075387954711914

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011851787567139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011851787567139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011851787567139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011851787567139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010979175567627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035858154296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011851787567139

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010979175567627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048830509185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048830509185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076398849487305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048830509185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076398849487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048830509185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076398849487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051608085632324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011360883712769

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046200752258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048830509185791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0076398849487305

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051608085632324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006493091583252


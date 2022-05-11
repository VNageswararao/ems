select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024290084838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024290084838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024290084838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024290084838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002593994140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024058818817139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024290084838867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002593994140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051670074462891

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030949115753174

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030949115753174

select fname,lname,mrdno from patient_registration where  patient_registration_id='1959' and  office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '2004' and  office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from patient_registration where  patient_registration_id= '2004' and  office_id= '1' 
 Execution Time:0.00065112113952637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2004' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024139881134033

select count(*) as cnt from patient_registration where  patient_registration_id= '2004' and  office_id= '1' 
 Execution Time:0.00065112113952637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2004' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024139881134033

select fname,lname,mrdno from patient_registration where  patient_registration_id='2004' and  office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from patient_registration where  patient_registration_id= '2009' and  office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_registration where  patient_registration_id= '2009' and  office_id= '1' 
 Execution Time:0.00067996978759766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2009' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025410652160645

select count(*) as cnt from patient_registration where  patient_registration_id= '2009' and  office_id= '1' 
 Execution Time:0.00067996978759766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2009' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025410652160645

select fname,lname,mrdno from patient_registration where  patient_registration_id='2009' and  office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0012600421905518

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0012600421905518

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047202110290527

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0012600421905518

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047202110290527

select fname,lname,mrdno from patient_registration where  patient_registration_id='2199' and  office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00099921226501465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00099921226501465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037970542907715

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037970542907715

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042915344238281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00044512748718262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046818256378174

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.00044512748718262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046818256378174

select fname,lname,mrdno from patient_registration where  patient_registration_id='1959' and  office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00053191184997559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024471282958984

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00053191184997559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024471282958984

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015618801116943

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015618801116943

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010080337524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010080337524414

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011239051818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011239051818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054209232330322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045819282531738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021991729736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021991729736328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062360763549805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098395347595215

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098395347595215

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015530586242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015530586242676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047950744628906

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049240589141846

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098180770874023

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098180770874023

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028390884399414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012969970703125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062108039855957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034289360046387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038790702819824

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060296058654785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060296058654785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055801868438721

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033860206604004

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033860206604004

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0054380893707275

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011811256408691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011811256408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002863883972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026359558105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026359558105469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006173849105835

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007800817489624

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007800817489624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007800817489624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.081892013549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007800817489624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.081892013549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007800817489624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039219856262207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.081892013549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.025184154510498

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.00037479400634766

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.00037479400634766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.00037479400634766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select fname,lname,mrdno from patient_registration where  patient_registration_id='2199' and  office_id= '1' 
 Execution Time:0.0011410713195801

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013262033462524

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013262033462524

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00083708763122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035610198974609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035610198974609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035610198974609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035610198974609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035610198974609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043580532073975

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043139457702637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043139457702637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010368824005127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068092346191406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068092346191406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060429573059082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085878372192383

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085878372192383

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022151470184326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015859603881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015859603881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015859603881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015859603881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002810001373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015859603881836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002810001373291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049839019775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031371116638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.0028409957885742

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.0028409957885742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021538734436035

select count(*) as cnt from patient_registration where  patient_registration_id= '1959' and  office_id= '1' 
 Execution Time:0.0028409957885742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1959' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021538734436035

select fname,lname,mrdno from patient_registration where  patient_registration_id='1959' and  office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from patient_registration where  patient_registration_id= '951' and  office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '951' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='951' and  doctors_registration.office_id= '1' 
 Execution Time:0.006554126739502

select count(*) as cnt from patient_registration where  patient_registration_id= '951' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='951' and  doctors_registration.office_id= '1' 
 Execution Time:0.006554126739502

select fname,lname,mrdno from patient_registration where  patient_registration_id='951' and  office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032739639282227

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020849704742432

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020849704742432

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.00020980834960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025639533996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025639533996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025639533996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025639533996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025639533996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024871826171875

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024871826171875

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.0011501312255859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054988861083984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054988861083984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054988861083984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054988861083984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054988861083984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033571720123291

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033571720123291

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013530254364014

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013530254364014

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00382399559021

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0039520263671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050661563873291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050661563873291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050661563873291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050661563873291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050661563873291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00074505805969238

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00074505805969238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2333' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044338703155518

select count(*) as cnt from patient_registration where  patient_registration_id= '2333' and  office_id= '1' 
 Execution Time:0.00074505805969238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2333' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044338703155518

select fname,lname,mrdno from patient_registration where  patient_registration_id='2333' and  office_id= '1' 
 Execution Time:0.0025639533996582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.049922943115234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.049922943115234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018799304962158

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0015058517456055

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.001917839050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015549898147583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015549898147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015549898147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043108463287354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015549898147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043108463287354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015549898147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043108463287354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093221664428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093221664428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043468475341797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0003349781036377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.003817081451416

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0003349781036377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.003817081451416

select fname,lname,mrdno from patient_registration where  patient_registration_id='2336' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080084800720215

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080084800720215

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078201293945312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052599906921387

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00040006637573242

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022461414337158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022461414337158

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014410018920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00105881690979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00105881690979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057387351989746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027740001678467

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00051784515380859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032999515533447

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00051784515380859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032999515533447

select fname,lname,mrdno from patient_registration where  patient_registration_id='2335' and  office_id= '1' 
 Execution Time:0.00032210350036621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060570240020752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060570240020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060570240020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060570240020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060570240020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.036901950836182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.036901950836182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034911632537842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.036901950836182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034911632537842

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00235915184021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.036901950836182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034911632537842

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00235915184021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032641887664795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.036901950836182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034911632537842

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00235915184021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032641887664795

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025129318237305

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.0074620246887207

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.0074620246887207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.007803201675415

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.0074620246887207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.007803201675415

select fname,lname,mrdno from patient_registration where  patient_registration_id='2335' and  office_id= '1' 
 Execution Time:0.0016980171203613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049710273742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00035214424133301

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.002269983291626

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00035214424133301

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.002269983291626

select fname,lname,mrdno from patient_registration where  patient_registration_id='2335' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034282207489014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034282207489014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034282207489014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034282207489014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034282207489014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0071561336517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010617971420288

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010617971420288

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010617971420288

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010617971420288

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036568641662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078418254852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078418254852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043442249298096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078418254852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043442249298096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078418254852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043442249298096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034952163696289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078418254852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043442249298096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032548904418945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034952163696289

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011041164398193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004127025604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004127025604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082528591156006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064611434936523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040948390960693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064611434936523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040948390960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064611434936523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040948390960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014100074768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.006256103515625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064611434936523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040948390960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014100074768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076103210449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076103210449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076103210449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040600299835205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076103210449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041568279266357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037338733673096

select count(*) as cnt from patient_registration where  patient_registration_id= '2335' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037338733673096

select fname,lname,mrdno from patient_registration where  patient_registration_id='2335' and  office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039386749267578

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00072312355041504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005263090133667

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005263090133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005263090133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00400710105896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005263090133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00400710105896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005263090133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00400710105896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051360130310059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051360130310059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051360130310059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051360130310059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051360130310059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013949871063232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044929981231689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0004580020904541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2337' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022969245910645

select count(*) as cnt from patient_registration where  patient_registration_id= '2337' and  office_id= '1' 
 Execution Time:0.0004580020904541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2337' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022969245910645

select fname,lname,mrdno from patient_registration where  patient_registration_id='2337' and  office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032520294189453

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00068211555480957

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010116100311279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010116100311279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052721500396729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010116100311279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052721500396729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010116100311279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052721500396729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0042960643768311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010116100311279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052721500396729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0042960643768311

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046310424804688

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0024168491363525

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0024168491363525

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0072000026702881

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018787384033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018787384033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018787384033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018787384033203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029611587524414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040638446807861

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040638446807861

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068783760070801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068783760070801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090289115905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090289115905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090289115905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011401176452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090289115905762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011401176452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013258457183838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048685073852539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015909671783447

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015909671783447

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075316429138184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069117546081543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069117546081543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015840530395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031559467315674

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078082084655762

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078082084655762

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059199333190918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010688304901123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029430389404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029430389404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080490112304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080490112304688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059449672698975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084080696105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084080696105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077469348907471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084080696105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077469348907471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084080696105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077469348907471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040740966796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06328010559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010033130645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060579776763916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084080696105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077469348907471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040740966796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053088665008545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048820972442627

select count(*) as cnt from patient_registration where  patient_registration_id= '1771' and  office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from patient_registration where  patient_registration_id= '1771' and  office_id= '1' 
 Execution Time:0.00044417381286621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031089782714844

select count(*) as cnt from patient_registration where  patient_registration_id= '1771' and  office_id= '1' 
 Execution Time:0.00044417381286621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031089782714844

select fname,lname,mrdno from patient_registration where  patient_registration_id='1771' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087189674377441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087189674377441

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079209804534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079209804534912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079209804534912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079209804534912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021669864654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043110847473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037410259246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079209804534912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021669864654541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062708854675293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020508766174316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020508766174316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011599063873291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098490715026855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098490715026855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098490715026855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001162052154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043020248413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098490715026855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001162052154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080029964447021

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050318241119385

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050318241119385

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027580261230469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038819313049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038819313049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038819313049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045578479766846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038819313049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045578479766846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030999183654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013468980789185

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038819313049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033729076385498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045578479766846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030999183654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01147198677063

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055885314941406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055885314941406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029516220092773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042989253997803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006718635559082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006718635559082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044140815734863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033161640167236

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030708312988281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058071613311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033481121063232

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072407722473145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072407722473145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013511180877686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048129558563232

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055122375488281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055122375488281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048141479492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_registration where  patient_registration_id= '2357' and  office_id= '1' 
 Execution Time:0.0026700496673584

select count(*) as cnt from patient_registration where  patient_registration_id= '2357' and  office_id= '1' 
 Execution Time:0.0026700496673584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2357' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042040348052979

select count(*) as cnt from patient_registration where  patient_registration_id= '2357' and  office_id= '1' 
 Execution Time:0.0026700496673584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2357' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042040348052979

select fname,lname,mrdno from patient_registration where  patient_registration_id='2357' and  office_id= '1' 
 Execution Time:0.0021791458129883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064351558685303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064351558685303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024421215057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064351558685303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024421215057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064351558685303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024421215057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064351558685303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024421215057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044791698455811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043630599975586

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029919147491455

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029919147491455

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093388557434082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093388557434082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006859302520752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006859302520752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006859302520752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006859302520752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012118816375732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051617622375488

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051617622375488

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096297264099121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096297264099121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048060417175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048060417175293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048060417175293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048060417175293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048060417175293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028600692749023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057539939880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072920322418213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037779808044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052449703216553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001535177230835

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001535177230835

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003821849822998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00180983543396

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00180983543396

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068020820617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068020820617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068020820617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068020820617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098490715026855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028190612792969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028190612792969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028190612792969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041029453277588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056028366088867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038208961486816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028190612792969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041029453277588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084609985351562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043470859527588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038981437683105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043470859527588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053751468658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.014070987701416

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.014070987701416

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.001060962677002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003187894821167

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046768188476562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018560886383057

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018560886383057

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018558502197266

select count(*) as cnt from patient_registration where  patient_registration_id= '1949' and  office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_registration where  patient_registration_id= '1949' and  office_id= '1' 
 Execution Time:0.00037217140197754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1949' and  doctors_registration.office_id= '1' 
 Execution Time:0.00217604637146

select count(*) as cnt from patient_registration where  patient_registration_id= '1949' and  office_id= '1' 
 Execution Time:0.00037217140197754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1949' and  doctors_registration.office_id= '1' 
 Execution Time:0.00217604637146

select fname,lname,mrdno from patient_registration where  patient_registration_id='1949' and  office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0042171478271484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0042171478271484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018410682678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030741691589355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061392784118652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021219253540039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032269954681396

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032269954681396

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028519630432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042068958282471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027530193328857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027530193328857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003727912902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027530193328857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003727912902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027530193328857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003727912902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069160461425781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032889842987061

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027530193328857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003727912902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038480758666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050430297851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030291080474854

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072097778320312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072097778320312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003821849822998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003821849822998

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038011074066162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038011074066162

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038011074066162

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038011074066162

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016604900360107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038011074066162

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090193748474121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032589435577393


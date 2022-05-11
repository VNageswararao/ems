select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003169059753418

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003169059753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003169059753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003169059753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003169059753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020270347595215

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00050806999206543

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005648136138916

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005648136138916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030848979949951

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005648136138916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030848979949951

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019979476928711

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019979476928711

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024199485778809

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select * from office where  office_id= '1' 
 Execution Time:0.00056290626525879

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029118061065674

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029118061065674

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00070309638977051

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00050902366638184

select * from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00050902366638184

select * from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00032997131347656

select * from billing_detail where  billing_master_id= '3' 
 Execution Time:0.002039909362793

select count(*) as cnt from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00050902366638184

select * from billing_master where  billing_master_id= '3' and  office_id= '1' 
 Execution Time:0.00032997131347656

select * from billing_detail where  billing_master_id= '3' 
 Execution Time:0.002039909362793

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.001784086227417

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0010390281677246

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0010390281677246

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023341178894043

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0010390281677246

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023341178894043

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0002281665802002


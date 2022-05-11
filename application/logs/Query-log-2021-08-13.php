select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021522045135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021522045135498

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021522045135498

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021522045135498

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-13' and '2021-08-13' and  patient_registration.office_id= 1      
 Execution Time:0.0027689933776855

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-04-27' and '2021-08-13' and  patient_registration.office_id= 1      
 Execution Time:0.00087690353393555


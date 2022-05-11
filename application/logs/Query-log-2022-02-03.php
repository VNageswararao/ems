select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0039689540863037

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017030239105225

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0055091381072998

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-01-31' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00199294090271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030241012573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030241012573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030241012573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0072758197784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030241012573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0072758197784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031688213348389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041661262512207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0049099922180176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032048225402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006497859954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030241012573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0072758197784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00059604644775391

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060391426086426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060391426086426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085997581481934

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029301643371582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055289268493652

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037312507629395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084114074707031

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00037312507629395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084114074707031

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0008702278137207

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032496452331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049979686737061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049979686737061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049979686737061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026009082794189

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00055599212646484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 197 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0031421184539795

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0031421184539795

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002863883972168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002863883972168

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012798309326172

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012798309326172

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00099015235900879

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00099015235900879

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00074315071105957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034785270690918

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009770393371582

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0024921894073486

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0024921894073486

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0029540061950684

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089907646179199

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089907646179199

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0039899349212646

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0039899349212646

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0031919479370117

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012750625610352

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012750625610352

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.000823974609375

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.000823974609375

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022051334381104

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022051334381104

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038769245147705

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0023951530456543

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0023951530456543

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.001323938369751

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00068211555480957

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00068211555480957

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001284122467041

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001284122467041

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0023109912872314

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0023109912872314

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013711452484131

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013711452484131

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262


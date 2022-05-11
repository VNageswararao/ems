select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046460628509521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046460628509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046460628509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016429424285889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046460628509521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016429424285889

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-01-22' and  '2022-01-22' and  billing_master.office_id= 1        
 Execution Time:0.0016520023345947

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004279613494873

SELECT *
FROM `examination`
WHERE `examination_id` = 57 
 Execution Time:0.0009009838104248

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00076508522033691

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0022850036621094

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=57 
 Execution Time:0.017597913742065

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=57 
 Execution Time:0.008026123046875

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=57 
 Execution Time:0.0072968006134033

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=57 
 Execution Time:0.0039851665496826

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='57' and office_id='1' 
 Execution Time:0.0051419734954834

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.0028450489044189

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004279613494873

SELECT *
FROM `examination`
WHERE `examination_id` = 57 
 Execution Time:0.0009009838104248

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00076508522033691

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0022850036621094

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=57 
 Execution Time:0.017597913742065

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=57 
 Execution Time:0.008026123046875

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=57 
 Execution Time:0.0072968006134033

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=57 
 Execution Time:0.0039851665496826

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='57' and office_id='1' 
 Execution Time:0.0051419734954834

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.0028450489044189

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0054318904876709

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004279613494873

SELECT *
FROM `examination`
WHERE `examination_id` = 57 
 Execution Time:0.0009009838104248

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00076508522033691

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0022850036621094

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=57 
 Execution Time:0.017597913742065

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=57 
 Execution Time:0.008026123046875

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=57 
 Execution Time:0.0072968006134033

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=57 
 Execution Time:0.0039851665496826

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='57' and office_id='1' 
 Execution Time:0.0051419734954834

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.0028450489044189

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0054318904876709

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00036120414733887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007857084274292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007857084274292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007857084274292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00052309036254883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 184 
 Execution Time:0.00043582916259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select * from examination where examination_id= '57' and   office_id= '1' 
 Execution Time:0.0014522075653076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 57 
 Execution Time:0.00051403045654297

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.00060391426086426

select * from examination where examination_id= '57' and   office_id= '1' 
 Execution Time:0.0014522075653076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 57 
 Execution Time:0.00051403045654297

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.00060391426086426

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select * from examination where examination_id= '57' and   office_id= '1' 
 Execution Time:0.0014522075653076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 57 
 Execution Time:0.00051403045654297

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.00060391426086426

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076889991760254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076889991760254

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

